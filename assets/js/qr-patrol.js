let benefitsBox1 = document.querySelector('.qr-patrol-third-hover-section > div:nth-child(1)')
let benefitsBox2 = document.querySelector('.qr-patrol-third-hover-section > div:nth-child(2)')
let benefitsBox3 = document.querySelector('.qr-patrol-third-hover-section > div:nth-child(3)')

benefitsBox1.addEventListener('mouseover', function() {
    benefitsBox1.classList.add('qr-patrol-benefits-active')

    benefitsBox2.classList.remove('qr-patrol-benefits-active')
    benefitsBox3.classList.remove('qr-patrol-benefits-active')
})

benefitsBox2.addEventListener('mouseover', function() {
    benefitsBox2.classList.add('qr-patrol-benefits-active')

    benefitsBox1.classList.remove('qr-patrol-benefits-active')
    benefitsBox3.classList.remove('qr-patrol-benefits-active')
})

benefitsBox3.addEventListener('mouseover', function() {
    benefitsBox3.classList.add('qr-patrol-benefits-active')

    benefitsBox2.classList.remove('qr-patrol-benefits-active')
    benefitsBox1.classList.remove('qr-patrol-benefits-active')
})
