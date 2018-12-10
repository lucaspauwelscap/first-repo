/*npx cypress run --record --key 175fe65a-1f4b-4ead-9763-b2fd0fa5de7f*/

describe('My First Test', function() {
    it('Tests something', () => {
        cy.visit('http://fo.demo.prestashop.com/en/');
        cy.get('input[name=s]').type('Sweater');
        cy.get('button[type=submit]').find('i').click();
        cy.contains('Hummingbird printed sweater').click();
        cy.get('#group_1').select('L');
        cy.get('input[name=qty]').clear().type('3');
        cy.wait(1000);
        cy.contains('Add to cart').click();
        cy.contains('Proceed to checkout').click();
        cy.get('.cart-item').find('.price').find('.product-price').contains('$86.16');
        cy.contains('delete').click();
        cy.contains('There are no more items in your cart');
    });
});