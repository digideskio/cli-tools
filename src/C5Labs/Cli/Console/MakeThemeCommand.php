<?php

/*
 * This file is part of Cli.
 *
 * (c) Oliver Green <oliver@c5labs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace C5Labs\Cli\Console;

use C5Labs\Cli\Commands\CreateThemeCommand;

class MakeThemeCommand extends PackageableObjectConsoleCommand
{
    /**
     * The name of the object that we are scaffolding.
     *
     * @var string
     */
    protected $object_name = 'Theme';

    /**
     * The name of the command to dispatch to create the object.
     * 
     * @var string
     */
    protected $command_name = CreateThemeCommand::class;

    /**
     * Configure the command.
     *
     * @return void
     */
    protected function configure()
    {
        $this
        ->setName('make:theme')
        ->setDescription('Generates boilerplate theme code.')
        ->setHelp('This command allows you to create themes.')
        ->addDefaultArguments();
    }
}
