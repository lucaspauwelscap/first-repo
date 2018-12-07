describe('Exercise 2', function() {
    it('Validates the BNPPF website.', function() {
      cy.visit('https://www.kbc.be/retail/en.html');
      cy.contains('No, I prefer not to');
      cy.contains('Savings').click();
      cy.contains('Saving for someone else').click();
      cy.contains('Saving for children').parent().click();
      cy.contains('Regulations').click();
    })
  });