<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Exceptions\LoginException;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Client\RequestException;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Jakyeru\Larascord\Traits\InteractsWithDiscord;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property string $name
 * @property string $password
 * @property int $id
 * @property string $username
 * @property string $global_name
 * @property int $discriminator
 * @property string $email
 * @property string $avatar
 * @property bool $verified
 * @property string $banner
 * @property string $banner_color
 * @property string $accent_color
 * @property string $locale
 * @property bool $mfa_enabled
 * @property int $premium_type
 * @property int $public_flags
 * @property string $role
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithDiscord;

    public $incrementing = false;

    public const GUILD_CACHE_TIME = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
        'id',
        'username',
        'global_name',
        'discriminator',
        'email',
        'avatar',
        'verified',
        'banner',
        'banner_color',
        'accent_color',
        'locale',
        'mfa_enabled',
        'premium_type',
        'public_flags',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'id' => 'integer',
        'username' => 'string',
        'global_name' => 'string',
        'discriminator' => 'string',
        'email' => 'string',
        'avatar' => 'string',
        'verified' => 'boolean',
        'banner' => 'string',
        'banner_color' => 'string',
        'accent_color' => 'string',
        'locale' => 'string',
        'mfa_enabled' => 'boolean',
        'premium_type' => 'integer',
        'public_flags' => 'integer',
        'roles' => 'array',
    ];

    /**
     * Gets and caches the current logged-in user's Discord guild list
     * @return Collection Guilds
     * @throws LoginException if attempted to use when not logged in or against another user than the logged-in user
     */
    function guilds(): Collection
    {
        if (!Auth::check() || Auth::id() != $this->id) {
            throw new LoginException("Can't get guilds for a different user or when not logged in");
        }
        return Cache::remember('guilds_' . $this->id, Carbon::now()->addMinutes(User::GUILD_CACHE_TIME), function () {
            try {
                return $this->getGuilds(true);
            }
            catch (RequestException $requestException) {
                if ($requestException->getCode() === 429) {
                    $response = json_decode(explode("\n", $requestException->getMessage())[1]);
                    if ($response && $response->retry_after) {
                        sleep(ceil($response->retry_after));
                        try {
                            return $this->getGuilds(true);
                        }
                        catch (Exception) {
                            return collect();
                        }
                    }
                }
                return collect();
            }
        });
    }

}
