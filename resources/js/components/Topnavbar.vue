<style lang="scss">

</style>

<template>
    <div id='topnav'>
        <ul class="menu">
            <li><router-link :to="{ name: 'Home'}">{{ $t('site.homepage.name') }}</router-link></li>
            <li><router-link :to="{ name: 'Physio'}">{{ $t('site.physio-page.name') }}</router-link></li>
            <li><router-link :to="{ name: 'Cranio'}">{{ $t('site.cranio-page.name') }}</router-link></li>
            <li><router-link :to="{ name: 'Practice'}">{{ $t('site.practice-page.name') }}</router-link></li>
            <li><router-link :to="{ name: 'Courses'}">{{ $t('site.courses-page.name') }}</router-link></li>
            <li><router-link :to="{ name: 'Contact'}">{{ $t('site.contact-page.name') }}</router-link></li>
        </ul>
    </div>
</template>

<script>
export default {
    data () {
        return {
        }
    },
}
</script>
