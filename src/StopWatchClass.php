<?php
/**
* StopWatch
*
* PHP version 7
*
* @category Testing
* @package  Stopwatch
* @author   Shital Adhegaonkar <s.adhegaonkar@easternenterprise.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.ansh-systems.com/
*/

namespace Src;
/**
 * Class StopWatchClass contains calculating the execution time.
 *
 * @category Testing
 * @package  Stopwatch
 * @author   Shital Adhegaonkar <s.adhegaonkar@easternenterprise.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.ansh-systems.com/
 */
class StopWatchClass
{

    /**
     * Calculate start time.
     *
     * @return startTime
     */
    public function start()
    {
        $startTime = $this->calculateExecTime();
        return $startTime;
    }

    /**
     * Calculate stop time.
     *
     * @param time $startTime calculate execution time from begining 
     *
     * @return mixed
     */
    public function stop($startTime)
    {
        $endTime = $this->calculateExecTime(); 
        $totalTime = ($endTime - $startTime); 
        return $totalTime;
    }

    /**
     * Generic function to calculate time.
     *
     * @return time in sec
     */
    public function calculateExecTime()
    {
        $mtime = microtime(); 
        $mtime = explode(" ", $mtime); 
        $mtime = $mtime[1] + $mtime[0]; 
        return $mtime;
    }

}

?>