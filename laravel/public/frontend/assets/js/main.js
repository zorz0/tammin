let sidebarClose=document.getElementById('sidebar-close');
let sidebarOpen=document.getElementById('sidebar-open'); 
let sidebar=document.querySelector('.sidebar');
console.log(sidebarOpen)
sidebarOpen.addEventListener('click',function(){

sidebar.style.display='block';
})

sidebarClose.addEventListener('click',function(){

    sidebar.style.display='none';
    })
// 


let tapcontant = document.querySelectorAll(".tab-contant")
let taptitel = document.querySelectorAll(".tab-titel")
// console.log(tapcontant,taptitel);

    
    taptitel.forEach(function(item){
            
        item.addEventListener("click",function(){
            // console.log(item);
        removeActive(taptitel)
        
        item.classList.add("activee")
        item.classList.remove("border")
        let dataId = item.dataset.id
        removeActive(tapcontant)
        document.getElementById(dataId).classList.add("activee")
    
            // console.log(dataId);
        })
        
    })

    function removeActive(items){
        items.forEach(function(element){
            element.classList.remove("activee")
            element.classList.add("border")
        })

    }

   