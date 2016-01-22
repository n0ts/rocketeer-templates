<?php
return array(

    // Slack room credentials
    'url'      => '',      // slack hook url (ex. https://hooks.slack.com/services/XXX)
    'username' => 'slack', // username (ex. slack)
    'room'     => '',      // channel name (ex. #deploy)

    // Message
    // You can use the following variables :
    // 1: User deploying
    // 2: Branch
    // 3: Connection and stage
    // 4: Host
    // 5: Revision
    // 6: Remote origin URL (only git)
    // 7: Release number
    // 8: Release path
    'before_before'  => array('fallback' => '{1} is deploying "{2}" on "{3}" ...',
                              'pretext' => '',
                              'title' => '{1} on "{3}" :loudspeaker:',
                              'title_link' => '',
                              'text' => 'deploying "{2}" ...',
                              'color' => 'good'),
    'after_after'    => array('fallback' => '... {1} finished deploying "{2}" on "{3}"',
                              'pretext' => '',
                              'title' => '{1} on "{3}" :clap: :beers:',
                              'title_link' => '{6}',
                              'text' => '... all finished deploying "{2}" at "{8}"',
                              'color' => 'good'),
    'before_deploy'  => array('fallback' => '{1} is deploying "{2}" on "{3}" ({4}) ...',
                              'pretext' => '',
                              'title' => '{1} on "{3}" ({4})',
                              'title_link' => '',
                              'text' => 'deploying branch "{2}"',
                              'color' => '#00FFDD'),
    'after_deploy'   => array('fallback' => '{1} finished deploying branch "{2}" on "{3}" ({4})',
                              'pretext' => '',
                              'title' => '{1} on "{3}" ({4})',
                              'title_link' => '',
                              'text' => 'finished deploying branch "{2}" - {7}',
                              'color' => '#00FF55'),
    'after_rollback' => array('fallback' => '{1} rolled back branch "{2}" on "{3}" to previous version ({7}) :ambulance:',
                              'pretext' => '',
                              'title' => '{1} on "{3}" :ambulance:',
                              'title_link' => '',
                              'text' => 'rolled back branch "{2}" to previous version ({7})',
                              'color' => 'warning'),

    // Default emoji to use as the bot's avatar
    'emoji'   => 'rocket',

);
