describe('Exercise 1', function() {
    it('Validates the BNPPF website.', function() {
      cy.visit('https://www.bnpparibasfortis.com');
      cy.contains('Enter').parent().click();
      cy.contains('Accessibility for our clients').click();
      cy.contains('disability');
    })
  });