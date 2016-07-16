<template>
    <label class="pure-checkbox" for="set-{{ set.id }}">
        <input id="set-{{ set.id }}" type="checkbox" name="sets[]" value="{{ set.id }}" checked="checked">
        {{ set.name }}
    </label>
</template>

<style>

</style>

<script>
    export default {
        props: ['set']
    }
</script>