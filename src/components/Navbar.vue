<script>
export default {
    data() {
        return {
            navigations: {
                "About": "#about",
                "Skills": "#skills",
                "Projects": "#projects",
                "Testimonials": "#testimonials",
            },
            isActive: false,
            isHidden: false
        }
    },
    methods: {
        // Toggle Navigation Menu on Mobile
        toggleActive() {
            this.isActive = !this.isActive
            this.isHidden = !this.isHidden
        }
    }
}
</script>
<template>
    <nav role="navigation">
        <div class="brand">
            <h1>Khawar Mehfooz</h1>
        </div>
        <ul class="nav__items" :class="{ active: isActive }">
            <li @click="toggleActive" v-for="(link, navigation, index) in navigations" class="nav__item"><a :href="link" class="nav__link">{{
                navigation }}</a></li>
        </ul>
        <div class="cta">
            <a href="mailto:khawarmehfooz@outlook.com">Hire Me</a>
        </div>
        <div class="nav__toggle">
            <button @click="toggleActive" class="toggle__buttons" :class="{ hide: isHidden }" aria-label="open navigation"
                id="open__nav">
                <i class="fas fa-bars fa-lg"></i>
            </button>
            <button @click="toggleActive" class="toggle__buttons" :class="{ hide: !isHidden }" aria-label="open navigation"
                id="close__nav">
                <i class="fas fa-x fa-lg"></i>
            </button>
        </div>

    </nav>
</template>

<style scoped>
body {
    position: relative;
}
.brand h1{
    background-image: linear-gradient(to top, var(--brand),#eab308);
    background-clip: text;
    color: transparent;
    -webkit-background-clip: text;
    font-size: 2.2rem;
}

nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 2rem 0;
    position: relative;
}

.nav__items {
    display: flex;
    align-items: center;
    gap: 4rem;
}

li {
    list-style-type: none;
}

a {
    color: var(--lightest);
    font-weight: 600;
    text-decoration: none;
}
.cta a{
    background: linear-gradient(to top, var(--brand),#eab308);
    padding: 8px 20px;
    border-radius: 6px;
}

a:hover {
    text-decoration: underline;
}

.toggle__buttons {
    background-color: transparent;
    outline: none;
    border: none;
    cursor: pointer;
    display: none;
}

.nav__toggle {
    display: none;
}

@media only screen and (max-width:800px) {

    .nav__items {
        gap: 2rem;
    }

}

@media only screen and (max-width:1024px) {
    .hide {
        display: none !important;
    }
    .cta{
        display: none;
    }
    .nav__items {
        position: fixed;
        flex-direction: column;
        gap: 1rem;
        height: 100%;
        inset: 0 0 0 20%;
        background-color: var(--darkest);
        padding: min(20rem, 15vh) 2rem;
        transform: translateX(100%);
        transition: transform 500ms ease-in-out;
    }
    .active {
        transform: translateX(0%);
    }

    .nav__toggle {
        display: block;
    }

    #open__nav {
        display: block;
        margin-left: 1rem;
        position: absolute;
        z-index: 2000;
        right: 1rem;
        top: .1rem;

    }

    #close__nav {
        display: block;
        position: absolute;
        z-index: 2000;
        right: 1rem;
        top: .1rem;


    }
}
@media only screen and (max-width:600px){
    .brand h1{
        font-size: 1.8rem;
    }
}
</style>