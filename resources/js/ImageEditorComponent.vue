<template>
    
    <div class="content">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            
            <li class="nav-items" role="presentation">
                <button class="nav-link active" id="pills-upload-tab" data-bs-toggle="pill" data-bs-target="#pills-upload" type="button" role="tab" aria-controls="pills-upload" aria-selected="true">Fotoğraf Yükle</button>
            </li>

            <li class="nav-items" role="presentation">
                <button class="nav-link" id="pills-edit-tab" data-bs-toggle="pill" data-bs-target="#pills-edit" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Düzenle</button>
            </li>

            <li class="nav-items" role="presentation">
                <button class="nav-link" id="pills-pricing-tab" data-bs-toggle="pill" data-bs-target="#pills-pricing" type="button" role="tab" aria-controls="pills-pricing" aria-selected="false">Sipariş Ver</button>
            </li>

            <li class="nav-items" role="presentation">
                <button class="nav-link" id="pills-list-tab" data-bs-toggle="pill" data-bs-target="#pills-list" type="button" role="tab" aria-controls="pills-list" aria-selected="false">Listeyi Getir</button>
            </li>

            <li class="nav-items" role="presentation">
                <button class="nav-link" id="pills-addcart-tab" data-bs-toggle="pill" data-bs-target="#pills-addcart" type="button" role="tab" aria-controls="pills-addcart" aria-selected="false">Sepete Ekle</button>
            </li>

        </ul>

        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-upload" role="tabpanel" aria-labelledby="pills-upload-tab">
                <div class="image-upload">
                    <p v-if="this.previewImage == null" class="display-6 text-dark" style="margin-bottom:4rem;">Translego için bir resim seçin</p>
                    <img v-if="this.previewImage != null" :src="previewImage" class="uploading-image"/>
                    <label class="choose-image__card file-card file-card_type-drop" for="imageUploadField">
                        <input v-if="this.previewImage == null" id="imageUploadField" type="file" name="image" @change=uploadImage
                        class="file-card__input visually-hidden" accept="image/*">
                        <span v-if="this.previewImage == null" class="file-card__inner">
                            <span class="file-card__graph">
                                <img src="/storage/icons/add-svgrepo-com.svg" alt="Add" class="file-card__graph-img file-card__graph-img__add">
                            </span>
                            <span class="file-card__title">Fotoğraf Yükle</span>
                        </span>
                        <div>
                            <button v-if="this.previewImage != null" id="convertButton" type="button" @click=canvasimage>Dönüştür</button>
                            
                            <input v-if="this.previewImage != null" id="imageUploadField" type="file" name="image" @change=uploadImage
                            class="file-card__input visually-hidden" accept="image/*">
                            <span v-if="this.previewImage != null" id="convertButton">
                                <span>Fotoğrafı Değiştir</span>
                            </span>
                        </div>
                            
                        

                    </label>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-edit" role="tabpanel" aria-labelledby="pills-edit-tab" style="width: 100%;">
                <div>
                    <span style="display: flex; position:absolute; right:5rem; top:7rem; justify-content: end;">
                        <button style="padding: 10px 25px; border-radius: 60px 0px 50px 6px;" type="button" class="btn btn-outline-primary" @click="changetab(1)"><span><img src="/storage/icons/previous-svgrepo-com.svg" width="18" alt=""></span> Geri dön</button>
                        <button style="padding: 10px 15px; border-radius: 0px 60px 6px 50px;margin-left: 1rem;" type="button" class="btn btn-outline-success" @click="changetab(3)"> Fiyat hesapla <span><img src="/storage/icons/next-svgrepo-com.svg" width="18" alt=""></span></button>
                    </span>
                </div>
                <div class="image-edit" style="display: flex; flex-direction: column; justify-content: center; align-items: center  ;">
                    <div style="width:50%;height: 50%;padding-top:50px;display:flex;align-items:center;justify-content:center;">
                            <canvas id="canvas" ref="canvas" style="height:400px;box-shadow:10px 10px 10px 10px gray;" class="border" @click="pick($event)"></canvas>
                    </div>
                    <div class="image-range">
                        <label for="customRange2" class="form-label" style="color:#0d6efd; font-size: 20px; font-weight: 600; text-align: start;">Boyut</label>
                        <input type="range" defaultValue="6" class="form-range" min="1" max="7" id="customRange2" @change="canvasimage">
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="pills-pricing" role="tabpanel" aria-labelledby="pills-pricing-tab" style="width:100%;color: black;">
                <div>
                    <span style="display: flex; position:absolute; right:5rem; top:7rem; justify-content: end;">
                        <button style="padding: 10px 25px; border-radius: 60px 0px 50px 6px;" 
                            type="button" class="btn btn-outline-primary" @click="changetab(2)">
                                <span><img src="/storage/icons/previous-svgrepo-com.svg" width="18" alt=""></span> Geri dön</button>
                    </span>
                </div>
                <div class="card-deck mb-3 text-center" style="display:flex; flex-direction: row;width: 100%;justify-content: space-around;margin-top: 8rem;">
                    <div class="card mb-4 box-shadow" style="width:40%">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Sadece Malzeme Listesi</h4>
                        </div>
                        <div class="card-body" style="display:flex; flex-direction:column; justify-content: space-between;">
                            <h1 class="card-title pricing-card-title">Ücretsiz</h1>
                            <p>TransLego'da oluşturduğunuz tablonuz için gereken malzemelerin bir listesini ücretsiz olarak sunuyoruz.</p>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary" @click="changetab(4)">Listeyi Göster</button>
                        </div>
                    </div>
                    <div class="card mb-4 box-shadow" style="width:40%">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Tüm Malzemeleri Biz Gönderelim</h4>
                        </div>
                        <div class="card-body" style="display:flex; flex-direction:column; justify-content: space-between;">
                            <h1 class="card-title pricing-card-title">{{this.pricing}}₺</h1>
                            <p>TransLego'da oluşturduğunuz tablonuz için gereken renklerde lego parçaları, taban plakası ve yapım tarifi dokümanı ile birlikte hızlı teslimat</p>
                            <ul class="list-unstyled mt-3 mb-4">
                            <li>Kaliteli Lego malzemeleri garantisi</li>
                            <li>Kolay yapım aşamaları tarifi</li>
                            <li>Siparişten sonraki 3 gün içinde teslim</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-primary" @click="postData">Sepete Ekle</button>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="tab-pane fade" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab" style="width:100%;color: black;">
                <div>
                    <span style="display: flex; position:absolute; right:5rem; top:7rem; justify-content: end;">
                        <button style="padding: 10px 25px; border-radius: 60px 0px 50px 6px;" 
                            type="button" class="btn btn-outline-primary" @click="changetab(3)">
                                <span><img src="/storage/icons/previous-svgrepo-com.svg" width="18" alt=""></span> Geri dön</button>
                    </span>
                </div>
                <table class="table" style="margin-top:5rem;">
                    <thead>
                        <tr class="table-primary">
                        <th scope="col">id</th>
                        <th scope="col">Ürün Adı</th>
                        <th scope="col">Renk Kodu</th>
                        <th scope="col">Adedi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="b in basket" :key="b.id">
                        <td>{{ b[0] }}</td>
                        <td>{{ b[1] }}</td>
                        <td>#{{ b[2] }}</td>
                        <td>{{ b[3] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="pills-addcart" role="tabpanel" aria-labelledby="pills-addcart-tab" style="width:100%;color: black;">
                <div v-if="login" class="alert alert-success" role="alert">
                    {{ sepetmesajı }}
                </div>
                <div v-else class="alert alert-danger" role="alert">
                    {{ sepetmesajı }}
                </div>
            </div>

        </div>
        
    </div>

</template>
<script>
    export default {
        data(){
            return{
                previewImage:null,
                range: 6,
                temp: null,
                product: "",
                basket:[],
                pricing: 0,
                sepetmesajı: "Ürün başarıyla sepetinize eklenmiştir!",
                login:false,
                brickColor:[{"id":"1","rgb":[244,244,244],"hex":"f4f4f4"},{"id":"2","rgb":[208,206,201],"hex":"d0cec9"},{"id":"3","rgb":[178,180,178],"hex":"b2b4b2"},{"id":"4","rgb":[140,138,136],"hex":"8c8a88"},{"id":"5","rgb":[100,100,100],"hex":"646464"},{"id":"6","rgb":[22,22,22],"hex":"161616"},{"id":"7","rgb":[0,187,220],"hex":"00bbdc"},{"id":"8","rgb":[175,205,215],"hex":"afcdd7"},{"id":"9","rgb":[139,190,232],"hex":"8bbee8"},{"id":"11","rgb":[62,135,203],"hex":"3e87cb"},{"id":"12","rgb":[0,94,184],"hex":"005eb8"},{"id":"13","rgb":[51,63,72],"hex":"333f48"},{"id":"14","rgb":[0,53,80],"hex":"003550"},{"id":"16","rgb":[221,121,117],"hex":"dd7975"},{"id":"18","rgb":[218,41,28],"hex":"da291c"},{"id":"19","rgb":[177,162,202],"hex":"b1a2ca"},{"id":"20","rgb":[142,127,174],"hex":"8e7fae"},{"id":"21","rgb":[236,208,181],"hex":"ecd0b5"},{"id":"22","rgb":[240,196,160],"hex":"f0c4a0"},{"id":"23","rgb":[250,170,141],"hex":"faaa8d"},{"id":"24","rgb":[248,173,109],"hex":"f8ad6d"},{"id":"25","rgb":[229,158,109],"hex":"e59e6d"},{"id":"27","rgb":[181,129,80],"hex":"b58150"},{"id":"28","rgb":[255,105,0],"hex":"ff6900"},{"id":"29","rgb":[166,85,35],"hex":"a65523"},{"id":"30","rgb":[107,53,41],"hex":"6b3529"},{"id":"31","rgb":[105,63,35],"hex":"693f23"},{"id":"32","rgb":[78,53,36],"hex":"4e3524"},{"id":"32","rgb":[120,78,144],"hex":"784e90"},{"id":"34","rgb":[248,229,154],"hex":"f8e59a"},{"id":"35","rgb":[213,200,151],"hex":"d5c897"},{"id":"36","rgb":[239,182,97],"hex":"efb661"},{"id":"37","rgb":[255,209,0],"hex":"ffd100"},{"id":"38","rgb":[255,163,0],"hex":"ffa300"},{"id":"39","rgb":[229,155,220],"hex":"e59bdc"},{"id":"40","rgb":[177,78,181],"hex":"b14eb5"},{"id":"41","rgb":[174,164,111],"hex":"aea46f"},{"id":"42","rgb":[174,184,98],"hex":"aeb862"},{"id":"43","rgb":[181,189,0],"hex":"b5bd00"},{"id":"44","rgb":[239,215,229],"hex":"efd7e5"},{"id":"45","rgb":[94,126,41],"hex":"5e7e29"},{"id":"46","rgb":[231,147,183],"hex":"e793b7"},{"id":"47","rgb":[207,87,138],"hex":"cf578a"},{"id":"48","rgb":[51,85,37],"hex":"335525"},{"id":"49","rgb":[45,200,77],"hex":"2dc84d"},{"id":"50","rgb":[0,154,6],"hex":"009a06"},
                ]
            }
        },
        
        methods:{
            uploadImage(e){
                const image = e.target.files[0];
                const reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e =>{
                    this.previewImage = e.target.result;
                };

            },
            
            canvasimage(){
                let bg = new Image();
                bg.src = this.previewImage;
                let val = document.getElementById('customRange2')
                this.basket = [];
                this.colorReduction(10-parseInt(val.value));
                document.getElementById('pills-edit-tab').click();
            },

            colorReduction(pixelationFactor){
                const canvas = this.$refs.canvas;
                const ctx = canvas.getContext('2d');
                const img = new Image();
                img.src = this.previewImage;
                const originalWidth = img.width;
                const originalHeight = img.height;
                var scalingFactor=Math.min((200/originalWidth),(200/originalHeight))
                var iw=originalWidth*scalingFactor;
                var ih=originalHeight*scalingFactor;
                const canvasWidth = iw;
                const canvasHeight = ih;
                ctx.canvas.width = canvasWidth;
                ctx.canvas.height = canvasHeight;
                ctx.drawImage(img, 0,0 ,iw,ih);
                var imageData = ctx.getImageData(0, 0, iw, ih);
                var data = imageData.data;
                
                for (let i = 0; i < data.length; i += 4) {
                    data[i] = Math.round(data[i] / 50) * 50;
                    data[i+1] = Math.round(data[i+1] / 50) * 50;
                    data[i+2] = Math.round(data[i+2] / 50) * 50;
                }

                ctx.putImageData(imageData,0,0);
                var sayı = 0;
                if (pixelationFactor !== 0) {
                    for (let y = 0; y < ih; y += pixelationFactor) {
                        for (let x = 0; x < iw; x += pixelationFactor) {
                            const pixelIndexPosition = (x + y * iw) * 4;
                            //console.log(data[pixelIndexPosition],data[pixelIndexPosition+1],data[pixelIndexPosition+2]);
                            let minIndex = this.getColorWithPalette(data[pixelIndexPosition],data[pixelIndexPosition+1],data[pixelIndexPosition+2]);
                            this.addBasket(minIndex);
                            sayı += 1;
                            ctx.fillStyle = `rgba(
                            ${this.brickColor[minIndex].rgb[0]},
                            ${this.brickColor[minIndex].rgb[1]},
                            ${this.brickColor[minIndex].rgb[2]},
                            1
                            )`;
                            ctx.fillRect(x, y, pixelationFactor, pixelationFactor);
                        }
                    }
                    this.calculatePricing();
                }

                this.product = ctx.canvas.toDataURL()
            },

            pick(event) {
                const bounding = document.getElementById('canvas').getBoundingClientRect();
                let ctx = document.getElementById('canvas').getContext("2d"); 
                ctx.fill();
                const x = event.clientX - bounding.left;
                const y = event.clientY - bounding.top;
                const pixel = ctx.getImageData(x, y, 2, 2);

                var data = pixel.data;
                
                data = new Uint8ClampedArray([
                    data[0],
                    data[1],
                    data[2],
                    data[3]
                ]);

                //ctx.fillStyle = `rgba(${data[0]}, ${data[1]}, ${data[2]}, ${data[3]})`

                //const imageData = new ImageData(data, 2, 2);
                //ctx.putImageData(imageData, x, y);
                //ctx.fillRect(x, y, 4, 4);
            
                const rgba = `rgba(${data[0]}, ${data[1]}, ${data[2]}, ${data[3] / 255})`;
                console.log(rgba);
            },

            RGBAToHexA(r,g,b) {
                    
                r = r.toString(16);
                g = g.toString(16);
                b = b.toString(16);

                if (r.length == 1)
                    r = "0" + r;
                if (g.length == 1)
                    g = "0" + g;
                if (b.length == 1)
                    b = "0" + b;
                return r + g + b;

            },

            getColorWithPalette(r,g,b){
                var rgb = this.RGBAToHexA(r,g,b)
                var min = Math.abs(parseInt(this.brickColor[0].hex,16) - parseInt(rgb,16));
                var minIndex = 0;
                for( let i = 1; i<this.brickColor.length; i++){
                    let temp = Math.abs(parseInt(this.brickColor[i].hex,16) - parseInt(rgb,16));
                    if(temp < min){
                        min = temp;
                        minIndex = i;
                    }
                }
                return minIndex;
                
            },

            getHexCode(){
                for(let i=0; i<this.BrickColor.length; i++){
                    let hex = this.RGBAToHexA(this.BrickColor[i].rgb[0],this.BrickColor[i].rgb[1],this.BrickColor[i].rgb[2])
                    this.BrickColor[i].hex = hex;
                }
                this.exportToJsonFile(this.BrickColor);
            },

            exportToJsonFile(jsonData) {
                let dataStr = JSON.stringify(jsonData);
                let dataUri = 'data:application/json;charset=utf-8,'+ encodeURIComponent(dataStr);

                let exportFileDefaultName = 'data.json';

                let linkElement = document.createElement('a');
                linkElement.setAttribute('href', dataUri);
                linkElement.setAttribute('download', exportFileDefaultName);
                linkElement.click();
            },

            changetab(index){
                if(index == 1)
                    document.getElementById('pills-upload-tab').click();
                else if(index == 2)
                    document.getElementById('pills-edit-tab').click();
                else if(index == 3)
                    document.getElementById('pills-pricing-tab').click();
                else if(index == 4)
                    document.getElementById('pills-list-tab').click();
                else if(index == 5)
                    document.getElementById('pills-addcart-tab').click();
                    

            },

            addBasket(index){
                var product = []
                var newproduct = true;
                for(var i = 0; i<this.basket.length; i++){
                    if(this.brickColor[index].id == this.basket[i][0]){
                        this.basket[i][3] += 1;
                        newproduct = false;
                        break;
                    }
                }
                if(newproduct){
                    product[0] = this.brickColor[index].id;
                    product[1] = this.brickColor[index].id;
                    product[2] = this.brickColor[index].hex;
                    product[3] = 1;
                    this.basket.push(product);
                }   
            },

            calculatePricing(){
                var totalPiece = 0;
                for(let i = 0 ; i<this.basket.length; i++){
                    totalPiece += this.basket[i][3];
                }
                this.pricing = Number((totalPiece*0.2).toFixed(2)); 
            },

            postData(){
                console.log(this.product.length);
                    axios.post('product/push', {
                    imagedata: this.product
                }).then((response) => {
                    console.log(response);
                    axios.post('basket/push', {
                    product_id: response.data.pop().id,
                    data: this.basket
                    }).then((response) => {
                        this.login=true
                        document.getElementById('pills-addcart-tab').click();
                    }).catch((error) => { 
                        if (error) {
                            this.login=false
                            this.sepetmesajı = 'Sepete ürün eklemek için giriş yapmalısını !'
                            document.getElementById('pills-addcart-tab').click();
                        }  
                    })            
                }).catch((error) => { 
                    if (error) {
                        
                        this.login=false
                        if(error.response.status == '401')
                            this.sepetmesajı = 'Sepete ürün eklemek için giriş yapmalısını !'
                        else
                            this.sepetmesajı = 'Maalesef bu ürün sepete eklenemiyor !'
                        document.getElementById('pills-addcart-tab').click();
                    }  
                })      


               
            }
        }
    }
</script>

<style>
.content{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    justify-content: center;
    padding-left: auto;
    padding-right: auto;
    color: #f2f2f2;
}

.tab-content{
    width: 100%;
    align-items: center;
    display: flex;
    justify-content: center;
}

.tab-pane{
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.nav-items{
    display: none;
}

.nav-pills{
    width:100%;
    background-color: #f0f0f0;
}

.uploading-image{
    margin-bottom: 20px;
    padding: 10px;
    background-color: #f0f0f0;
    border-radius: 5px;
    max-width: 90%;
}


.image-upload{
    border: solid 0.5px #d0d0d0;
    background-color: #ffff;
    border-radius: 5px;
    padding: 50px 50px;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
input[type=file]::file-selector-button {
    margin-right: 20px;
    border: none;
    background: #084cdf;
    padding: 10px 20px;
    border-radius: 10px;
    color: #fff;
    cursor: pointer;
    transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
    background: #0d45a5;
}

.image-upload button{
    margin-right: 20px;
    border: none;
    border-radius: 10px;
    background: #084cdf;
    padding: 10px 20px;
    color: #fff;
    cursor: pointer;
    transition: background .2s ease-in-out;
}

.image-upload button:hover{
    background: #2156b3;
}

.file-card__input {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
}

.file-card {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    -webkit-user-select: none;
    user-select: none;
}
.choose-image__card {
    width: 190px;
    margin-right: 10px;
    margin-bottom: 10px;
    display: contents;

}
label {
    display: inline-block;
    cursor: default;
}

.visually-hidden {
    position: absolute;
    clip: rect(0 0 0 0);
    width: 1px;
    height: 1px;
    margin: -1px;
}

.file-card_type-drop .file-card__inner {
    border-color: #c8def7;
    background-color: #f1f8ff;
    color: #548bca;
    cursor: pointer;
}
.file-card__inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 190px;
    width: 50%;
    padding: 20px;
    color: #201c2c;
    border: 1px solid silver;
    border-radius: 10px;
    background-color: hsla(0,0%,82.7%,.1);
    text-align: center;
    transition: .3s;
}

.file-card__graph {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 55px;
    margin: 0 auto 15px;
}

.file-card__graph-img__add {
    width: 60px;
    height: 60px;
}

.file-card__graph-img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.file-card__title {
    font-size: 24px;
    line-height: 150%;
}

#convertButton {
    display: inline-block;
    cursor: pointer;
    white-space: normal;
    max-width: 100%;
    transition: .3s;
    padding: 19px 20px 22px;
    font-family: "Synthese",sans-serif;
    font-size: 15px;
    line-height: 1.2;
    font-weight: 400;
    letter-spacing: -.01em;
    text-decoration: none;
    color: #fff;
    background-color: #3987e0;
    border: 1px solid #3987e0;
    border-radius: 10px;
}

#convertButton:hover{
    background-color: #5094e3;
}

.form-range::before{
    content: "Min";
    padding: 5px;
    font-size: 15px;
    font-weight: 600;
    color: #084cdf;
}
.form-range::after{
    content: "Max";
    padding: 5px;
    font-size: 15px;
    font-weight: 600;
    color: #084cdf;
}

.image-range{
    width:30%; 
    height: 50%; 
    display: flex; 
    flex-direction: column; 
    margin-top: 2rem;
    padding: 25px 25px;
    border: solid #084cdf 0.2px;
    box-shadow:10px 10px 10px 5px gray;
}
</style>