var theme = true;
const toggleThemeButton = document.querySelector('#toggle-theme')

toggleThemeButton.addEventListener('click', () => {
    theme = (theme) ? false : true;
    console.log("Trocou"+theme)
    changeTheme()
})

function changeTheme() {
    return (theme) ? lightMode() : darkMode()
}

const darkMode = () => {
    console.log("Dark Mode")
    document.documentElement.style.setProperty('--background', '#15202b')
    document.documentElement.style.setProperty('--title', '#fff')
    document.documentElement.style.setProperty('--text', '#acacac')
    document.documentElement.style.setProperty('--shadow', '#fff')
    document.documentElement.style.setProperty('--border', '#fff')
    document.documentElement.style.setProperty('--outline', '#fff')
    document.documentElement.style.setProperty('--outline-focus', '#fff')
    document.documentElement.style.setProperty('--primary', '#fff')

}

const lightMode = () => {
    console.log("Light Mode")
    document.documentElement.style.setProperty('--background', '#fff')
    document.documentElement.style.setProperty('--title', '#000')
    document.documentElement.style.setProperty('--text', '#4c4c4c')
    document.documentElement.style.setProperty('--shadow', '#0000001a')
    document.documentElement.style.setProperty('--border', '#a9a9a9')
    document.documentElement.style.setProperty('--outline', '#636363')
    document.documentElement.style.setProperty('--outline-focus', '#1f3040')
    document.documentElement.style.setProperty('--primary', '#3535dc')
}