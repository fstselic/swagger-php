<?php declare(strict_types=1);
namespace SwaggerFixtures;

/**
 * This is the description of the class that inherits from base schema.
 *
 * @OAS\Schema(type="object", required={}, title="Inherit from Base Schema")
 */
class InheritBaseSchema extends BaseSchema
{
    /**
     * This is the description of the local property.
     *
     * @var int
     * @OAS\Property()
     */
    public $local;
}
