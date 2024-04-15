<div class="calculator card mt-4 col-md-6">
    <input type="text" class="calculator-screen form-control mb-4 mt-4" style="height: 50px; font-size: 2rem;" wire:model="result" disabled />
    
    <div class="calculator-keys">
        <div class="row m-2">
            <div class="col">
                <button type="button" wire:click="calculate('7')" class="btn btn-dark btn-block ">7</button>
            </div>
            <div class="col">
                <button type="button" wire:click="calculate('8')" class="btn btn-dark btn-block">8</button>
            </div>
            <div class="col">
                <button type="button" wire:click="calculate('9')" class="btn btn-dark btn-block">9</button>
            </div>
            <div class="col">
                <button type="button" wire:click="calculate('+')" class="btn btn-info btn-block">+</button>
            </div>
        </div>
        <div class="row m-2">
            <div class="col">
                <button type="button" wire:click="calculate('4')" class="btn btn-dark btn-block">4</button>
            </div>
            <div class="col">
                <button type="button" wire:click="calculate('5')" class="btn btn-dark btn-block">5</button>
            </div>
            <div class="col">
                <button type="button" wire:click="calculate('6')" class="btn btn-dark btn-block">6</button>
            </div>
            <div class="col">
                <button type="button" wire:click="calculate('-')" class="btn btn-info btn-block">-</button>
            </div>
        </div>
        <div class="row m-2">
            <div class="col">
                <button type="button" wire:click="calculate('1')" class="btn btn-dark btn-block">1</button>
            </div>
            <div class="col">
                <button type="button" wire:click="calculate('2')" class="btn btn-dark btn-block">2</button>
            </div>
            <div class="col">
                <button type="button" wire:click="calculate('3')" class="btn btn-dark btn-block">3</button>
            </div>
            <div class="col">
                <button type="button" wire:click="calculate('*')" class="btn btn-info btn-block">&times;</button>
            </div>
        </div>
        <div class="row m-2">
            <div class="col">
                <button type="button" class="btn btn-secondary btn-block">.</button>
            </div>
            <div class="col">
                <button type="button" wire:click="calculate('0')" class="btn btn-dark btn-block">0</button>
            </div>
            <div class="col">
                <button type="button" wire:click="clear" class="btn btn-danger btn-block">AC</button>
            </div>
            <div class="col">
                <button type="button" wire:click="calculate('/')" class="btn btn-info btn-block">&divide;</button>
            </div>
        </div>
        <div class="row m-2">
            <div class="col">
                <button type="button" wire:click="evaluate" class="btn btn-primary btn-block">=</button>
            </div>
        </div>
    </div>
</div>
