exports.apiDropdown = () => {

    if (! document.querySelector('.api-item')) {
        return
    }

    window.onclick = e => {
        const target = e.target
        const classes = target.className

        if (! classes.includes('api-dropdown')) {
            return
        }

        const result = target.closest('.api-item').querySelector('.api-result')

        result.classList.toggle('hidden')
    }
}