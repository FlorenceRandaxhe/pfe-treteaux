<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <textarea
                :id="field.name"
                class="w-full form-control form-input form-input-bordered py-3 h-auto"
                :class="errorClasses"
                :placeholder="field.name"
                :max="field.maxLenght"
                v-model="value"></textarea>

            <p class="my-2 text-light">
                {{ field.maxLenght - value.length }} characters restants.
            </p>
        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],


    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
}
</script>
