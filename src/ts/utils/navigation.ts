import { screenResize } from './screen-resize'
export const navigation = () => {
  const burger: HTMLDivElement | null = document.querySelector('.burger')
  const nav: HTMLDivElement | null = document.querySelector('.header-mobile')
  const submenus: NodeListOf<HTMLDivElement> | null = document.querySelectorAll(
    'li.menu-item-has-children'
  )
  const html = document.documentElement
  const body = document.body

  if (!burger || !nav) return

  burger.addEventListener('click', () => {
    nav.classList.toggle('--active')

    if (nav.classList.contains('--active')) {
      burger.classList.add('open')
      html.style.overflowY = 'hidden'
      body.classList.add('open')
      return
    }
    burger.classList.remove('open')
    html.style.overflowY = 'auto'
    body.classList.remove('open')
  })

  // submenus.forEach((submenu) => {
  //   submenu.addEventListener('click', (e) => {
  //     const target = e.target as HTMLDivElement
  //     if (target.closest('.sub-menu')) return
  //     const sub = submenu.querySelector('.sub-menu') as HTMLDivElement
  //     if (!submenu) return
  //     submenu.classList.toggle('--active')

  //     if (submenu.classList.contains('--active')) {
  //       const scrollHeight = sub.scrollHeight
  //       sub.style.minHeight = `${scrollHeight}px`
  //       sub.style.maxHeight = `${scrollHeight}px`
  //     } else {
  //       sub.style.minHeight = '0'
  //       sub.style.maxHeight = '0'
  //     }
  //   })
  // })

  screenResize(500, injectSVGToFooter)
}

const injectSVGToFooter = () => {
  if (window.innerWidth > 768) return
  const footer = document.querySelector('footer')
  if (!footer) return
  const container = footer.querySelector('.footer-main__left')
  if (!container) return
  const svg = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M7.26465 20.7206L15.7499 12.2353L7.26465 3.75" stroke="#A7A7A7" stroke-width="3" stroke-linecap="round"/></svg>`
  const links = container.querySelectorAll('a')
  links.forEach((link) => {
    link.innerHTML = link.textContent + svg
  })
}
