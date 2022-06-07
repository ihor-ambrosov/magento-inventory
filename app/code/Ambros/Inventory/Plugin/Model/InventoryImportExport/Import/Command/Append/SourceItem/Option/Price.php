<?php
/**
 * @author Ihor Ambrosov <ihor.ambrosov@gmail.com>
 * @license https://opensource.org/licenses/OSL-3.0
 */
declare(strict_types=1);

namespace Ambros\Inventory\Plugin\Model\InventoryImportExport\Import\Command\Append\SourceItem\Option;

/**
 * Source item price option import append command plugin
 */
class Price extends \Ambros\InventoryCommon\Plugin\Model\InventoryImportExport\Import\Command\Append\SourceItem\Option
{
    /**
     * Constructor
     * 
     * @param \Ambros\Inventory\Api\Inventory\SourceItem\Option\Price\SaveInterface $saveOptions
     * @param \Ambros\Inventory\Model\InventoryImportExport\Import\SourceItem\Option\Price\Convert $convertOptions
     */
    public function __construct(
        \Ambros\Inventory\Api\Inventory\SourceItem\Option\Price\SaveInterface $saveOptions,
        \Ambros\Inventory\Model\InventoryImportExport\Import\SourceItem\Option\Price\Convert $convertOptions
    )
    {
        parent::__construct(
            $saveOptions,
            $convertOptions
        );
    }
}