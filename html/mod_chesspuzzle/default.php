<?php
/**
 * ChessPuzzle Module output file
 *
 * @license GNU/GPL, see LICENSE.php
 * mod_nbill is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * *******
 * Had to change mod_chesspuzzle.php
 * line: require(dirname(__FILE__) . "/tmpl/default.php");
 * to: require JModuleHelper::getLayoutPath('mod_chesspuzzle', $params->get('layout', 'default'));
 * To be able to overload
 */

defined ('_JEXEC' ) or die('Access Denied');

class chesspuzzle_output
{
    public static function show_pre_module($pre_mod)
    {
        ?>
        <div><?php echo $pre_mod; ?></div>
        <?php
    }

    public static function show_chessgames_puzzle()
    {
        ?>
        <iframe name="puzzle" src="http://www.chessgames.com/puzzle.html" width="296" height="448" hspace="0" vspace="0" marginwidth="0" marginheight="0" scrolling="no" frameborder="0"></iframe>
        <?php
    }

    public static function show_gameknot_puzzle($size = "medium")
    {
        ?>
        <div id="gk-daily-puzzle"><!--s=<?php
        switch ($size)
        {
            case "small":
                echo "2";
                break;
            case "large":
                echo "4";
                break;
            case "max":
                echo "5";
                break;
            default: //Medium
                echo "3";
                break;
        }
        ?>,c=16,p=3,b=1-->Play <a href="http://gameknot.com/">chess online</a></div>
        <script type="text/javascript" src="http://gameknot.com/daily-puzzle.js"></script>
        <?php
    }

    public static function show_shredder_puzzle($size = "medium")
    {
        switch ($size)
        {
            case "small":
                ?>
                <iframe style="border:none;" width="220" height="261" src="http://www.shredderchess.com/online/playshredder/gdailytactics.php?mylang=en&amp;mysize=22"></iframe>
                <?php
                break;
            case "large":
            case "max":
                ?>
                <iframe style="border:none;" width="310" src="http://www.shredderchess.com/online/playshredder/gdailytactics.php?mylang=en&amp;mysize=32"></iframe>
                <?php
                break;
            default: //Medium
                ?>
                <iframe style="border:none;" width="256" height="293" src="http://www.shredderchess.com/online/playshredder/gdailytactics.php?mylang=en&amp;mysize=26"></iframe>
                <?php
                break;
        }
    }

    public static function show_post_module($post_mod)
    {
        ?>
        <div><?php echo $post_mod; ?></div>
        <?php
    }
}