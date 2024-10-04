

function createHTMLComments(jsonResponse){
    let textHTML='<ul>'
    jsonResponse.forEach((elem)=>{
        textHTML+=`<li><strong>${elem.username}</strong>: ${elem.comment}</li>`
    })
    textHTML+='</ul>'
    document.querySelector('.js-content').innerHTML=textHTML
}


const req= new XMLHttpRequest();
req.addEventListener('load',()=>{
    const jsonResponse=JSON.parse(req.responseText)
    createHTMLComments(jsonResponse['data'])
})
req.open("GET","http://localhost/lab_6-8/LAB_8/backend/comments.php")
req.send()
createHTMLComments();