<style lang="scss">
    .Player {
        margin-bottom: 0.5em;

        &__header {
            background-color: #111111;
            color: #FFFFFF;
            padding: 1em;
        }

        ul {
            margin: 0;
            padding: 1em;
        }
        li {
            list-style-type: none;
        }
    }
</style>

<script>
    export default {
        props: ['index', 'player']
    }
</script>

<template>
    <div class="Player pure-u-1 pure-u-md-1-2 pure-u-xl-1-4">
        <div class="Player__header">Player {{index}}</div>
        <ul>
            <li v-for="faction in player.factions">{{ faction.label }}</li>
        </ul>
    </div>
</template>