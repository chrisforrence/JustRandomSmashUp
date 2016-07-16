<style lang="scss">
    .pure-button {
        background-color: #001f3f;
        color: #7FDBFF;
        width: 100%;
        margin-bottom: 1em;
    }
    .Alert {
        border: 1px solid #000;
        border-collapse: collapse;
        padding: 1em;
        margin-bottom: 1em;
        position: relative;

        &__madness {
            background-color: #FF4136;
            color: #000000;
        }
        &__monsters {
            background-color: #FF851B;
            color: #000000;
        }
        &__treasure {
            background-color: #FFDC00;
            color: #000000;
        }
    }
</style>

<template>
    <div class="pure-u-1 pure-u-md-8-24">
        <form class="pure-form" @submit="generate(); return false;">
            <label for="num_players">How Many Players?</label>
            <input v-model="num_players" id="num_players" type="number" min="0" placeholder="2-4 is recommended.">
            <label for="num_players" v-if="errors && errors.players">{{errors.players}}</label>
            <p>You can have multiple concurrent games! Just enter in as many players as you need.</p>

            <div v-for="set in sets">
                <label class="pure-checkbox" for="set-{{ set.id }}">
                    <input id="set-{{ set.id }}" type="checkbox" v-model="num_sets" value="{{ set.id }}" checked="checked">
                    {{ set.name }}
                </label>
            </div>
            <button id="submit" class="pure-button" type="button" @click="generate()">Get Ready To Smash!</button>
        </form>
    </div>
    <div class="pure-u-1 pure-u-md-1-24"></div>
    <div class="pure-u-1 pure-u-md-15-24">
        <span id="results">&nbsp;</span>
        <div class="pure-g">
            <div v-show="requires_madness" class="pure-u-1 Alert Alert__madness">
                Don't forget the Madness deck; you'll need it for this match!
            </div>
            <div v-show="requires_monsters" class="pure-u-1 Alert Alert__monsters">
                Don't forget the Monsters deck; you'll need it for this match!
            </div>
            <div v-show="requires_treasure" class="pure-u-1 Alert Alert__treasure">
                Don't forget the Treasure deck; you'll need it for this match!
            </div>
            <jrsu-player
                v-for="player in players"
                :player="player"
                :index="$index + 1">
            </jrsu-player>
        </div>
    </div>
</template>

<script>
    var Set = require('./Set.vue');
    var Player = require('./Player.vue');
    export default {
        components: {
            'jrsu-set': Set,
            'jrsu-player': Player
        },
        data() {
            return {
                num_players: 2,
                num_sets: [],
                players: [],
                sets: [],
                errors: [],
                requires_madness: false,
                requires_treasure: false,
                requires_monsters: false
            };
        },
        methods: {
            generate: function() {
                this.$http.post('/generate', {
                    players: this.num_players,
                    sets: this.num_sets
                }).then(function(response) {
                    var json = response.json();
                    this.$set('errors', null);
                    this.$set('players', json.players);
                    this.$set('requires_madness', json.requires_madness);
                    this.$set('requires_treasure', json.requires_treasure);
                    this.$set('requires_monsters', json.requires_monsters);

                    var toggle = document.querySelector('#submit');
                    var options = { speed: 1000, easing: 'easeOutCubic' };
                    smoothScroll.animateScroll( '#results', toggle, options );
                }, function(response) {
                    var json = response.json();
                    this.$set('errors', response.json());
                });
            }
        },
        ready() {
            this.$http.get('/sets').then(function(response) {
                this.sets = response.json();
            }, function(response) {});

        }
    }
</script>