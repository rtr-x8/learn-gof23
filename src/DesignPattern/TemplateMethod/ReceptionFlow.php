<?php


namespace DesignPattern\TemplateMethod;


abstract class ReceptionFlow
{
    private string $name;

    /**
     * SampleRepository constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->greet();
        $this->navigate();
        $this->close();
    }

    public abstract function greet(): void;

    public abstract function navigate(): void;

    public abstract function close(): void;

    public function getName(): string
    {
        return $this->name;
    }
}
