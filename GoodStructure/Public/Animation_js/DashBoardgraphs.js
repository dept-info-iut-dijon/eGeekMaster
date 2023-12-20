/**
 * @author Théo Cornu
*/

function getImageUrlForLabel(label) {
    switch(label) {
        case 'Dishes': return 'Public/image/page_reference/img_dishes.png';
        case 'DIY': return 'Public/image/page_reference/img_diy.png';
        case 'Cleaning': return 'Public/image/page_reference/img_cleaning.png';
        case 'Shopping': return 'Public/image/page_reference/img_shopping.png';
        case 'Cooking': return 'Public/image/page_reference/img_cooking.png';
        case 'Laundry': return 'Public/image/page_reference/img_laundry.png';
        case 'ChildsPlay': return 'Public/image/page_reference/img_childsPlay.png';
        case 'ChildrensJourney': return 'Public/image/page_reference/img_childrensJourney.png';
        case 'ParentJourney': return 'Public/image/page_reference/img_parentJourney.png';
        case 'ParentCare': return 'Public/image/page_reference/img_parentCare.png';
        case 'Administrative': return 'Public/image/page_reference/img_administrative.png';
        case 'PetCare': return 'Public/image/page_reference/img_petCare.png';
        case 'Gardening': return 'Public/image/page_reference/img_gardening.png';
        case 'HouseholdManagement': return 'Public/image/page_reference/img_householdManagement.png';
        default: return 'default-image.jpg';
    }
}

function ShowGraph1() {
    const labels = JSON.parse(document.getElementById('labels').value);
    const data1 = JSON.parse(document.getElementById('data1').value);
    const ctx1 = document.getElementById('myChart1');
    

    const chart = new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                label: 'Distribution Duration',
                data: data1,
                borderWidth: 0,
            }]
        },
        options: {
            responsive: true,
            onClick: (event, elements) => {
                if (elements.length > 0) {
                    const clickedIndex = elements[0].index;
                    const clickedLabel = labels[clickedIndex];
            
                    const imageUrl = getImageUrlForLabel(clickedLabel);
                    const imageContainer = document.getElementById('imageContainer');
                    imageContainer.src = imageUrl;
                    imageContainer.style.display = 'flex';
            
                    setTimeout(() => {
                        imageContainer.style.display = 'none';
                    }, 5000);
                }
            },
        }
    });
};

function ShowGraph2(){
    const labels = JSON.parse(document.getElementById('labels').value);
    const data2 = JSON.parse(document.getElementById('data2').value);
    const ctx2 = document.getElementById('myChart2');
    
    const colors = ['36A2EB', 'FF6384', 'FF9F40', 'FFCD56', '4BC0C0', '9966FF'];
    const backgroundColors = colors.map((color, index) => {
        const repeatedIndex = index % colors.length;
        return `#${colors[repeatedIndex]}`;
    });

    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Average Duration',
                data: data2,
                backgroundColor: backgroundColors,
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            indexAxis: 'y',
            plugins: {
            }
        }
    });
};

function ShowGraphs(){
    ShowGraph1();
    ShowGraph2();
};

window.addEventListener('load',ShowGraphs);