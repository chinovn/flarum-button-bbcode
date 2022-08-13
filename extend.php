<?php namespace ChinoVN\Flarum\Button\BBcode;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
  	->css(__DIR__.'/less/forum.less'),
  
    (new Extend\Formatter)
    ->configure(function (Configurator $config) {
        $config->BBCodes->addCustom('[BUT]{COLOR},{TEXT},{URL}[/BUT]', '<a href="{URL}" class="cb-button standard" style="background-color:{COLOR};" target="_blank" rel="noopener ugc nofollow">{TEXT}</a>');
        $config->BBCodes->addCustom('[BUT1]{COLOR},{TEXT},{URL}[/BUT1]', '<a href="{URL}" class="cb-button animateme extra" style="background-color:{COLOR};" target="_blank" rel="noopener ugc nofollow">{TEXT}</a>');
        $config->BBCodes->addCustom('[BUT2]{COLOR},{TEXT},{URL}[/BUT2]', '<a href="{URL}" class="cb-button pulseme" style="background-color:{COLOR};" target="_blank" rel="noopener ugc nofollow">{TEXT}</a>');
        $config->BBCodes->addCustom('[BUT3]{COLOR},{TEXT},{URL}[/BUT3]', '<a href="{URL}" class="cb-button flashme" style="background-color:{COLOR};" target="_blank" rel="noopener ugc nofollow">{TEXT}</a>');
        $config->BBCodes->addCustom('[BUT4]{COLOR},{IDENTIFIER},{TEXT},{URL}[/BUT4]', '<a href="{URL}" class="cb-button standard" style="background-color:{COLOR};" target="_blank" rel="noopener ugc nofollow"><i class="fas fa-{IDENTIFIER} left"></i>{TEXT}</a>');
        $config->BBCodes->addCustom('[BUT5]{COLOR},{IDENTIFIER},{TEXT},{URL}[/BUT5]', '<a href="{URL}" class="cb-button standard" style="background-color:{COLOR};" target="_blank" rel="noopener ugc nofollow">{TEXT}<i class="fas fa-{IDENTIFIER} right"></i></a>');
        $config->BBCodes->addCustom('[BUT6]{COLOR},{IDENTIFIER},{TEXT},{URL}[/BUT6]', '<a href="{URL}" class="cb-button hoverme" style="background-color:{COLOR};" target="_blank" rel="noopener ugc nofollow">{TEXT}<i class="fas fa-{IDENTIFIER}"></i></a>');
    })
];
