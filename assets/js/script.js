const btn1 = document.getElementById('btn1')
const btn2 = document.getElementById('btn2')

window.addEventListener('resize', () => {

    if (innerWidth < 1024) {
        btn1.classList.add('w-100', 'mb-2')
        btn2.classList.add('w-100', 'mb-2')
    } else {
        btn1.classList.remove('w-100', 'mb-2')
        btn2.classList.remove('w-100', 'mb-2')
    }
})