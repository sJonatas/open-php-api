<?php

namespace Enums;

enum ParameterStyle: string
{
    case Form = 'form';
    case Simple = 'simple';

    public function fromParameterMethod(ParameterMethodOptions $option): self
    {
        return match($option->value) {
            ParameterMethodOptions::Query->value || ParameterMethodOptions::Header->value => static::Form,
            ParameterMethodOptions::
        };
    }
}