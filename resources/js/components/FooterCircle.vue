<style lang="scss">

.footer-circle {
    position: absolute;
    text-align: center;
    height: 280px;
    aspect-ratio: 1;

    &.footer-circle-bg {
        .contact, .contact > a {
            color: $white;
        }
    }

    .text-pos {
        position: absolute;
        white-space: nowrap;
    }

    h2 {
        margin: 0;
    }

    &--sophie {
        top: -64px;
        left: -30px;

        &.footer-circle-bg {
            clip-path: circle(29%);
            background: get-color(sophie);
        }

        .text-pos {
            top: 50%;
            left: 50%;
            transform: translate(-35%, -55%);
        }
    }

    &--anja {
        bottom: -5px;
        right: -50px;

        &.footer-circle-bg {
            clip-path: circle(23%);
            background: get-color(anja);
        }

        .text-pos {
            top: 50%;
            left: 50%;
            transform: translate(-59%, -10%);
        }
    }

    &--dagmar {
        top: -94px;
        left: -10px;

        &.footer-circle-bg {
            clip-path: circle(27%);
            background: get-color(dagmar);
        }

        .text-pos {
            top: 50%;
            left: 50%;
            transform: translate(-56%, -25%);
        }
    }

    &--sarah {
        bottom: -67px;
        right: 30px;

        &.footer-circle-bg {
            clip-path: circle(35%);
            background: get-color(sarah);
        }

        .text-pos {
            top: 50%;
            left: 50%;
            transform: translate(-37%, -60%);
        }
    }
}

</style>

<template>
    <div :class="'footer-circle footer-circle--' + person.tag">
        <div class="contact text-pos">
            <h2 class="contact-name">{{ person.name }}</h2>
            <span v-for="activity in person.activities">{{ $t('site.' + activity + '-page.name') }}<br/></span>
            <a :href="'tel:'+person.phone.replaceAll(' ','')">t. {{ person.phone }}</a>
        </div>
    </div>
    <div
        :class="'footer-circle footer-circle--' + person.tag + ' ' + 'footer-circle-bg'">
        <div class="contact text-pos">
            <h2 class="contact-name">{{ person.name }}</h2>
            <span v-for="activity in person.activities">{{ $t('site.' + activity + '-page.name') }}<br/></span>
            <a :href="'tel:'+person.phone.replaceAll(' ','')">t. {{ person.phone }}</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "FooterCircle",
    props: {
        person: Object,
        position: String
    },
}
</script>
