# SurvivalGames for <em>PocketMine-MP</em>

This is a PocketMine-MP SurvivalGames plugin. A.K.A williamtdr killer.

## Installation

Put the sgInstaller.php in your /plugins PocketMine folder. Boom, you're done :D The server will install the plugin, and reboot.

## server.properties additions
| Entry | Type | Description |
| :---: | :---: | :--- |
| __sg.tournament-length__ | `INT` | Sets the length of the SurvivalGames tournament. Default is 20 minutes. |
| __sg.tournament-chestfill__ | `BOOLEAN` | Sets whether to refill the chests during the SG tournament or not. Default is true. |
| __sg.auth-enable__ | `BOOLEAN` | Enables or disables the sgAuth module (player authentication). Default is true. |
| __sg.autobroadcast-enable__ | `BOOLEAN` | Enables or disables autobroadcast. Default is disabled. |
| __sg.su-enable__ | `BOOLEAN` | Enables or disables super-user permissions override. May be dangerous. Default is false. |
| __sg.su-password__ | `STRING` | The password for the super-user override, if enabled. Default is password. |
