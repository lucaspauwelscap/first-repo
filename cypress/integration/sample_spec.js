describe('My First Cypress Test', function() {
  it('Validates the Capgemini\'s webite!', function() {
    cy.visit('https://www.capgemini.com/be-en/');
    cy.contains('About us').click();
    cy.contains('Capgemini’s 50th Anniversary').click();
    cy.contains('Beyonce');
  })
});