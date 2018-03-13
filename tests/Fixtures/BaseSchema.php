<?php declare(strict_types=1);
namespace SwaggerFixtures;

/**
 * This is the description of the parent class.
 *
 * @OAS\Schema(type="object", required={}, title="Base Schema")
 */
class BaseSchema
{
    /**
     * This is the description of the base property.
     *
     * @var string
     * @OAS\Property()
     */
    public $base;
}
