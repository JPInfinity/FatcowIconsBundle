<?php

namespace JPInfinity\FatcowIconsBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Generate SCSS and LESS files.
 *
 * @author Julien Peltier <contact@julien-peltier.fr>
 */
class GenerateFilesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('fatcowicons:generate')
            ->setDescription('Generates the scss files corresponding on the icons availables.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $scssDir = realpath(__DIR__ .'/../Resources/scss');

        // ICONS 16x16
        $fp = fopen($scssDir . '/_fatcow16.scss', 'w+');
        $content = "";
        $icons16 = glob(__DIR__ .'/../Resources/public/images/icons16x16/*.{png,jpg,gif}', GLOB_BRACE);
        foreach($icons16 as $img)
        {
            $image = pathinfo($img);
            $content .= sprintf('.fci-%s {background-image:url(\'#{$icon16}/%s\');}'.PHP_EOL, $this->_slugify($image['filename']), basename($img));
        }
        fwrite($fp, $content);
        fclose($fp);
        $output->writeln(sprintf('Icons 16x16 - %d icons available', count($icons16)));

        // ICONS 32x32
        $fp = fopen($scssDir . '/_fatcow32.scss', 'w+');
        $content = "";
        $icons32 = glob(__DIR__ .'/../Resources/public/images/icons32x32/*.{png,jpg,gif}', GLOB_BRACE);
        foreach($icons32 as $img)
        {
            $image = pathinfo($img);
            $content .= sprintf('.fci32-%s {background-image:url(\'#{$icon32}/%s\');}'.PHP_EOL, $this->_slugify($image['filename']), basename($img));
        }
        fwrite($fp, $content);
        fclose($fp);
        $output->writeln(sprintf('Icons 32x32 - %d icons available', count($icons32)));

        $output->writeln('===');
        $output->writeln('You must generate the css files');
    }

    private function _slugify($str)
    {
        $str = preg_replace('`[^[:alnum:]]`', ' ', strtolower($str));
        $str = preg_replace('`[^[:alnum:]]`', '-', trim($str));
        return $str;
    }
}
