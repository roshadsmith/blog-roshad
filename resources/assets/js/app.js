require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    data() {
        return {
            sidebar: {
                height: 0,
                windowHeight: 0,
                windowScrollTop: 0
            }
        }
    },
    computed: {
        sidebarStyles() {
            if (this.sidebar.height <= this.sidebar.windowHeight)
                return { 'fixed-top': true }
            if ((this.sidebar.windowScrollTop + this.sidebar.windowHeight) > this.sidebar.height)
                return { 'fixed-bottom': true }
        }
    },
    created() {
        window.addEventListener('resize', this.handleResize)
        window.addEventListener('scroll', this.handleScroll)
    },
    mounted() {
        this.calculateSidebar()
    },
    methods: {
        handleResize: _.throttle(function() {
            this.calculateSidebar()
        }, 100),
        handleScroll: _.throttle(function() {
            this.sidebar.windowScrollTop = window.pageYOffset || document.documentElement.scrollTop
        }, 100),
        calculateSidebar() {
            this.sidebar.height = this.$refs.sidebarContent.offsetHeight
            this.sidebar.windowHeight = window.innerHeight
        }
    }
});