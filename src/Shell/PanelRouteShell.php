<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Core\Configure;

/**
 * PanelRoute shell command.
 */
class PanelRouteShell extends Shell
{

    /**
     * Manage the available sub-commands along with their arguments and help
     *
     * @see http://book.cakephp.org/3.0/en/console-and-shells.html#configuring-options-and-generating-help
     *
     * @return \Cake\Console\ConsoleOptionParser
     */
    public function getOptionParser()
    {
        $parser = parent::getOptionParser();

        return $parser;
    }

    /**
     * main() method.
     *
     * @return bool|int|null Success or error code.
     */
    public function main()
    {
        if (!in_array('generate', $this->args)) {
            $this->out($this->OptionParser->help());
            return null;
        }

        $route_name = bin2hex(openssl_random_pseudo_bytes(16));

        Configure::write('Misc', [
            'panel_route' => $route_name
        ]);

        Configure::dump('misc', 'default', ['Misc']);

        $this->success("The route has been regenerated and is available as $route_name");
    }
}
