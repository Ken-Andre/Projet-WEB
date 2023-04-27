@extends('layouts.index')

@section('content')

    <!-- Section Titre -->
    <div class="page-heading bg-light">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <h1>CheckOut</h1>
                    <p class="mb-5"><a href="#">Home</a> / <a href="{{route('cart')}}">Cart</a>/ <strong>CheckOut</strong></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Section titre -->
    </header>
    <main>
        <!-- Panier commented
        <table>
          <thead>
            <tr>
              <th>Produit</th>
              <th>Prix unitaire</th>
              <th>Quantité</th>
              <th>Prix total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Produit 1</td>
              <td>10,00 €</td>
              <td><input type="number" value="1"></td>
              <td>10,00 €</td>
              <td><button class="remove">Supprimer</button></td>
            </tr>
            <tr>
              <td>Produit 2</td>
              <td>20,00 €</td>
              <td><input type="number" value="1"></td>
              <td>20,00 €</td>
              <td><button class="remove">Supprimer</button></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3">Total</td>
              <td>30,00 €</td>
              <td></td>
            </tr>
          </tfoot>
        </table> -->
        <!-- Payement -->
        <div class="untree_co-section">
            <div class="container">

                <div class="payment">
                    <h2>Choisissez votre mode de paiement :</h2>
                    <div class="payment-options">
                        <label>
                            <input type="radio" name="payment" value="om">
                            <img src="om-logo.png" alt="Logo OM">
                        </label>
                        <label>
                            <input type="radio" name="payment" value="paypal">
                            <img src="paypal-logo.png" alt="Logo Paypal">
                        </label>
                    </div>
                </div>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="boboy.youssaou@2026.ucac-icam.com">
                    <input type="hidden" name="item_name" value="Product Name">
                    <input type="hidden" name="amount" value="10.00">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="return" value="http://www.yourwebsite.com/thankyou.html">
                    <input type="hidden" name="cancel_return" value="http://www.yourwebsite.com/cancel.html">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                </form>

                <div class="actions">
                    <a href="{{route('products')}}">Continuer mes achats</a>
                    <button>Passer commande</button>
                </div>

    </main>
@endsection
