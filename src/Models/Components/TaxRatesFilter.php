<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Apideck\Unify\Models\Components;

use Apideck\Unify\Utils\SpeakeasyMetadata;
class TaxRatesFilter
{
    /**
     * Boolean to describe if tax rate can be used for asset accounts
     *
     * @var ?bool $assets
     */
    #[SpeakeasyMetadata('queryParam:name=assets')]
    public ?bool $assets = null;

    /**
     * Boolean to describe if tax rate can be used for equity accounts
     *
     * @var ?bool $equity
     */
    #[SpeakeasyMetadata('queryParam:name=equity')]
    public ?bool $equity = null;

    /**
     * Boolean to describe if tax rate can be used for expense accounts
     *
     * @var ?bool $expenses
     */
    #[SpeakeasyMetadata('queryParam:name=expenses')]
    public ?bool $expenses = null;

    /**
     * Boolean to describe if tax rate can be used for liability accounts
     *
     * @var ?bool $liabilities
     */
    #[SpeakeasyMetadata('queryParam:name=liabilities')]
    public ?bool $liabilities = null;

    /**
     * Boolean to describe if tax rate can be used for revenue accounts
     *
     * @var ?bool $revenue
     */
    #[SpeakeasyMetadata('queryParam:name=revenue')]
    public ?bool $revenue = null;

    /**
     * @param  ?bool  $assets
     * @param  ?bool  $equity
     * @param  ?bool  $expenses
     * @param  ?bool  $liabilities
     * @param  ?bool  $revenue
     */
    public function __construct(?bool $assets = null, ?bool $equity = null, ?bool $expenses = null, ?bool $liabilities = null, ?bool $revenue = null)
    {
        $this->assets = $assets;
        $this->equity = $equity;
        $this->expenses = $expenses;
        $this->liabilities = $liabilities;
        $this->revenue = $revenue;
    }
}