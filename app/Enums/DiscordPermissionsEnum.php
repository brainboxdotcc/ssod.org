<?php

namespace App\Enums;

use Jakyeru\Larascord\Types\Guild;

enum DiscordPermissionsEnum: int
{
    case CREATE_INSTANT_INVITE = 0x00000001;
    case KICK_MEMBERS = 0x00000002;
    case BAN_MEMBERS = 0x00000004;
    case ADMINISTRATOR = 0x00000008;
    case MANAGE_CHANNELS = 0x00000010;
    case MANAGE_GUILD = 0x00000020;
    case ADD_REACTIONS = 0x00000040;
    case VIEW_AUDIT_LOG = 0x00000080;
    case VIEW_CHANNEL = 0x00000400;
    case SEND_MESSAGES = 0x00000800;
    case SEND_TTS_MESSAGES = 0x00001000;
    case MANAGE_MESSAGES= 0x00002000;
    case EMBED_LINKS = 0x00004000;
    case ATTACH_FILES = 0x00008000;
    case READ_MESSAGE_HISTORY = 0x00010000;
    case MENTION_EVERYONE = 0x00020000;
    case USE_EXTERNAL_EMOJIS = 0x00040000;
    case CONNECT = 0x00100000;
    case SPEAK = 0x00200000;
    case MUTE_MEMBERS = 0x00400000;
    case DEAFEN_MEMBERS = 0x00800000;
    case MOVE_MEMBERS = 0x01000000;
    case USE_VAD = 0x02000000;
    case PRIORITY_SPEAKER = 0x00000100;
    case STREAM = 0x00000200;
    case CHANGE_NICKNAME = 0x04000000;
    case MANAGE_NICKNAMES = 0x08000000;
    case MANAGE_ROLES = 0x10000000;
    case MANAGE_WEBHOOKS = 0x20000000;
    case MANAGE_EMOJIS = 0x40000000;

    /**
     * Returns true if the guild permissions contain the given permission
     * @param Guild $guild Guild to check
     * @param DiscordPermissionsEnum $permission Permission to check
     * @return bool True if the guild contains the permission
     */
    static public function hasPermission(Guild $guild, DiscordPermissionsEnum $permission): bool {
        return ($guild->permissions_new & $permission->value);
    }
};
