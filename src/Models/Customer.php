<?php

/**
 * Part of the Stripe package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Cartalyst PSL License.
 *
 * This source file is subject to the Cartalyst PSL License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Stripe
 * @version    1.0.0
 * @author     Cartalyst LLC
 * @license    Cartalyst PSL
 * @copyright  (c) 2011-2015, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Cartalyst\Stripe\Models;

class Customer extends Collection
{
    /**
     * Returns all the customer charges.
     *
     * @return array
     */
    public function chargesAttribute()
    {
        return $this->getApiClient()->chargesIterator([
            'customer' => $this->id,
        ])->toArray();
    }
}