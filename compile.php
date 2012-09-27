<?php

//require('/usr/share/php/Console/Table.php');
//require('/usr/share/php/Console/Color.php');

require('modules/l10n_feedback/includes/common.inc');

require('btranslator.install');
require('btranslator.profile');
require('install/dev-config.php');
require('install/content-sq.php');
require('modules/fb_btranslator/fb_btranslator.module');
require('modules/fb_btranslator/fb_btranslator.install');
require('modules/l10n_feedback/l10n_feedback.install');
require('modules/l10n_feedback/l10n_feedback.admin.inc');

require('modules/l10n_feedback/l10n_feedback.module');
require('modules/l10n_feedback/l10n_feedback.rules_defaults.inc');
require('modules/l10n_feedback/includes/cron.inc');
require('modules/l10n_feedback/includes/projects.inc');
require('modules/l10n_feedback/includes/drush/l10n_feedback.drush.inc');
require('modules/l10n_feedback/includes/hook_user.inc');

require('modules/l10n_feedback/includes/ajax_callbacks.inc');
require('modules/l10n_feedback/includes/translations/import.inc');
require('modules/l10n_feedback/includes/translations/search_filter/form.inc');
require('modules/l10n_feedback/includes/translations/search_filter/query.inc');
require('modules/l10n_feedback/includes/translations/search_filter/search_filter.inc');
require('modules/l10n_feedback/includes/translations/vote.inc');
require('modules/l10n_feedback/includes/translations/list/list.inc');
require('modules/l10n_feedback/includes/translations/list/form_submit.inc');
require('modules/l10n_feedback/includes/translations/list/form_build.inc');
require('modules/l10n_feedback/includes/translations/list/theme_functions.inc');
require('modules/l10n_feedback/includes/translations/get.inc');
require('modules/l10n_feedback/includes/translations/search.inc');
require('modules/l10n_feedback/includes/translations/export.inc');
require('modules/l10n_feedback/includes/translations/utils.inc');
require('modules/l10n_feedback/l10n_feedback.test');
require('modules/l10n_feedback/data/gettext/POWriter.php');
require('modules/l10n_feedback/data/gettext/POParser.php');
require('modules/l10n_feedback/data/db/class.DB.php');
require('modules/l10n_feedback/data/db/example.settings.php');
require('modules/l10n_feedback/data/db/get-db-settings.php');
require('modules/l10n_feedback/data/db/get-db-settings.php');   
require('modules/l10n_feedback/data/import/pot_import.db.php');
require('modules/l10n_feedback/data/import/po_import.db.php');
require('modules/l10n_feedback/data/import/po_import.php');   
require('modules/l10n_feedback/data/import/pot_import.php');   
require('modules/l10n_feedback/data/export/db_diff.db.php');
require('modules/l10n_feedback/data/export/po_export.db.php');
require('modules/l10n_feedback/data/export/db_snapshot.db.php');   
require('modules/l10n_feedback/data/export/db_diff.php');   
require('modules/l10n_feedback/data/export/db_snapshot.php');   
require('modules/l10n_feedback/data/export/po_export.php');   
require('modules/l10n_feedback/l10n_feedback.fields.inc');