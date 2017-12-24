<?php
/**
 * MyClass File Doc Comment
 *
 * @category MyClass
 * @package  App
 * @author   Display Name <olivamati@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */

namespace App;
use App\Transaction;

/**
 * MyClass Class Doc Comment
 *
 * @category Class
 * @package  App
 * @author   Display Name <olivamati@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */

class Buyer extends User
{

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
