const productList = document.getElementById('product-list');
const productForm = document.getElementById('product-form');
const cancelButton = document.getElementById('cancel-button');
const productName = document.getElementById('product-name');
const productPrice = document.getElementById('product-price');
const productImage = document.getElementById('product-image');
const productId = document.getElementById('product-id');

let products = [
	{id: 1, name: 'Produit 1', price: 10, image: 'image-1.jpg'},
	{id: 2, name: 'Produit 2', price: 20, image: 'image-2.jpg'},
	{id: 3, name: 'Produit 3', price: 30, image: 'image-3.jpg'}
];

function renderProductList() {
	productList.innerHTML = '';
	products.forEach(product => {
		const li = document.createElement('li');
		li.innerText = product.name;
		li.addEventListener('click', () => showProductForm(product));
		productList.appendChild(li);
	});
}

function showProductForm(product) {
	productForm.style.display = 'block';
	productName.value = product ? product.name : '';
	productPrice.value = product ? product.price : '';
	productImage.value = product ? product.image : '';
	productId.value = product ? product.id : '';
}

function cancelProductForm() {
	productForm.style.display = 'none';
	productName.value = '';
	productPrice.value = '';
	productImage.value = '';
	productId.value = '';
}

function saveProduct(event) {
	event.preventDefault();
	const name = productName.value;
	const price = productPrice.value;
	const image = productImage.value;
	const id = productId.value || Date.now();
	const index = products.findIndex(product => product.id == id);
	if (index >= 0) {
		products[index].name = name;
		products[index].price = price;
		products[index].image= image;
	} else {
		products.push({id, name, price, image});
	}
	renderProductList();
	cancelProductForm();
}

renderProductList();
productForm.addEventListener('submit', saveProduct);
cancelButton.addEventListener('click', cancelProductForm);