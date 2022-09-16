<div class="grid place-items-center my-48">
    
<div class="bg-white border-heather place-content-center border-2 rounded box-content w-96 h-full pb-4">
    
    <img class="my-8 mx-auto" src="{{ asset('img/Piedmont_Logo_No Tagline.png') }}" alt="description of myimage">
       
    <h1 class="text-4x1 text-black font bold text-center bg-gray-200 py-4 mt-8">Sheet Weight Conversion Calculator</h1>
    
    <!-- weight indicator -->
    
    <label><h2 class="text-center mt-5 text-lg text-slate-500 font-light"> Weight</h2> </label>
    <label><h2 class="text-center mt-0 mb-2 text-6xl text-slate-500 font-semibold"> 0 </h2> </label>
    
         
    
   <div>
       <div class="mx-2 mt-22">
    <!-- Material Dropdown -->
    <form>
           <label class="font-semibold"> Material
        <select class="form-select appearance-none
        block
        w-full
        px-3
        p-4
        text-base
        font-normal
        text-black
        bg-white bg-clip-padding bg-no-repeat
        border border-solid border-heather
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Select a Material" wire:model="material">
       
            <option value="aa" selected>Choose a material</option>
            <option value="a" selected>ABS</option>
            <option value="b" selected>Acetal</option>
            <option value="c" selected>Arcrylic</option>
            <option value="d" selected>Arcrylic Mirror</option>
            <option value="e" selected>PETG</option>
            <option value="f" selected>Polycarbonate</option>
            <option value="g" selected>Polypropylene</option>
            <option value="h" selected>Styrene</option>
            <option value="i" selected>Teflon</option>
            <option value="j" selected>PVC Type</option>
            <option value="k" selected>PVC Foam Sheet</option>
            <option value="l" selected>UHMW</option>
        </select>   
        </label> 
        </div>


    <!-- integer inputs -->
<div class="mx-2 grid grid-rows-2 grid-cols-2 gap-x-2 gap-y-3">
   <div> <label class="font-semibold"> Length
    <input class="block
    text-center
    w-full
    px
    p-4
    text-base
    font-normal
    text-black
    bg-white bg-clip-padding bg-no-repeat
    border border-solid border-heather
    rounded
    transition
    ease-in-out" wire:model="length" type="integer" />
    </label></div>
    
    <div><label class="font-semibold"> Width
        <input class="block
        w-full
        text-center
        p-4
        px
        text-base
        font-normal
        text-black
        bg-white bg-clip-padding bg-no-repeat
        border border-solid border-heather
        rounded
        transition
        ease-in-out
        mx-0" wire:model="width" type="integer" />
        </label></div>

    

    <div>
    <label class="font-semibold"> Thickness (0.25)
            <input class="block
            w-full
            text-center
            px
            p-4
            text-base
            font-normal
            text-black
            bg-white bg-clip-padding bg-no-repeat
            border border-solid border-heather
            rounded
            transition
            ease-in-out
            mx-0" wire:model="thickness" type="integer" />
            </label>
        </div>
    
    <div>
    <button type="submit"
    data-mdb-ripple="true"
    data-mdb-ripple-color="light"
    class="block w-full mt-6 p-4 bg-sky-500 text-white font-medium border border-solid rounded hover:bg-sky-300 hover:shadow-lg focus:bg-sky-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-300 active:shadow-lg transition duration-150 ease-in-out">Calculate</button>
    </div>
      
    
    </form>
</div>
    </div>
</div>    

</div>
  

  