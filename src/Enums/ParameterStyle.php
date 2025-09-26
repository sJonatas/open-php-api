<?php

namespace Enums;

enum ParameterStyle: string
{
    case Form = 'form';
    case Simple = 'simple';

    public function fromParameterMethod(ParameterMethodOptions $option): self
    {
        return match($option->value) {
            ParameterMethodOptions::Query->value => static::Form,
            ParameterMethodOptions::Path->value => static::Simple,
            ParameterMethodOptions::Header->value => static::Simple,
            ParameterMethodOptions::Cookie->value => static::Form,
        };
    }
}