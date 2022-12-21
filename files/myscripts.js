
const userCardTemplate = document.querySelector("[data-user-template]")
const userCardContainer = document.querySelector("[data-user-cards-container]")
const searchInput = document.querySelector("[data-search]")

let users=[]

searchInput.addEventListener("input",(e) =>{

  const value=e.target.value.toLowerCase()
  users.forEach(user =>{
    const isVisible=
    user.name.toLowerCase().includes(value) || user.email.toLowerCase().includes(value)
    user.element.classList.toggle("hide", !isVisible)

  })

})

fetch("files/teacherinfo.json")
.then(res => res.json())
.then(data =>{
  users= data.map(user => {
  const card = userCardTemplate.content.cloneNode(true).children[0]
  const header= card.querySelector("[data-header]")
  const body= card.querySelector("[data-body]")
  const tel= card.querySelector("[data-telephone]")
  const clas= card.querySelector("[data-classroom]")
  const days= card.querySelector("[data-day]")



    header.textContent=user.name
    body.textContent=user.email
    tel.textContent=user.telephone
    clas.textContent=user.classroom
    days.textContent=user.day


    userCardContainer.append(card)
    return{ name: user.name,   email: user.email,tel: user.telephone,
      clas: user.classroom,    days: user.day,  element: card}
  })
})

