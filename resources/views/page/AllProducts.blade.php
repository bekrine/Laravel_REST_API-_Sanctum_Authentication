{{-- 


    <div>
        <input type="text" name="search" id="search">
        <div>
            <div id="results"></div>
        </div>
    </div>


    <script>
  const products = <?php echo json_encode($products); ?>;
        const input = document.getElementById('search')
        
        input.addEventListener('input',()=>{

            if(input.value.length > 0 ){
                let filterProduct=products.filter(p=>p.name.includes(input.value))
                let results=document.getElementById('results')
                results.innerHTML=''  
                         filterProduct.forEach(product => {
                            let result = document.createElement('li');
                            result.innerText = product.name;

                            result.addEventListener('click', function() {
                    document.getElementById('search').value = product.name;
                });
                            results.appendChild(result);
                         });

            }else{
                let results=document.getElementById('results')
                results.innerHTML=''
            }

        })
    </script> --}}


    <select id="mySelect" class="search-select">
        <option></option>
        @forEach($products as $product)
        <option value="2">{{$product->name}}</option>
        @endforEach
        <!-- Add more options here -->
    </select>
    


    <!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.search-select').select2({
            width: '100%', // Adjust the width as needed
            placeholder: 'Search options...',
            allowClear: true // Enable clearing the selection
        });
    });
    </script>
    