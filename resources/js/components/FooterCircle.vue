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

    &--sophie {
        top: -59px;
        left: -44px;

        &.footer-circle-bg {
            clip-path: circle(34%);
            background: get-color(sophie);
        }

        .text-pos {
            top: 50%;
            left: 50%;
            transform: translate(-29%, -55%);
        }
    }

    &--anja {
        bottom: -19px;
        right: -66px;

        &.footer-circle-bg {
            clip-path: circle(27%);
            background: get-color(anja);
        }

        .text-pos {
            top: 50%;
            left: 50%;
            transform: translate(-72%, -27%);

            a {
                display: none; // Hide phone number for Anja
            }
        }
    }

    &--dagmar {
        top: -92px;
        left: -66px;

        &.footer-circle-bg {
            clip-path: circle(25%);
            background: get-color(dagmar);
        }

        .text-pos {
            top: 50%;
            left: 50%;
            transform: translate(-28%, -25%);
        }
    }

    &--sarah {
        bottom: -70px;
        right: -40px;

        &.footer-circle-bg {
            clip-path: circle(35%);
            background: get-color(sarah);
        }

        .text-pos {
            top: 50%;
            left: 50%;
            transform: translate(-69%, -65%);
        }
    }
}

</style>

<template>
    <div :class="'footer-circle footer-circle--' + person.tag">
        <div class="contact text-pos">
            <div class="contact-name">{{ person.name }}</div>
            <span v-for="activity in person.activities">{{ $t('site.' + activity + '-page.name') }}<br/></span>
            <a :href="'tel:'+person.phone.replaceAll(' ','')">t. {{ person.phone }}</a>
        </div>
    </div>
    <div
        :class="'footer-circle footer-circle--' + person.tag + ' ' + 'footer-circle-bg'">
        <div class="contact text-pos">
            <div class="contact-name">{{ person.name }}</div>
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
