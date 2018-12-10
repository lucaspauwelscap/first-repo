const url = 'https://www.google.com/?hl=nl';

given('I visit Google.be', () => {
    cy.visit(url)
});

when('I type Martin Garrix in the Google search box', () => {
    cy.get('input[name=q]').type('Martin Garrix')
});

when('I click on the Google search button', () => {
    cy.contains('Google zoeken').click()
});

then('Results for martin garrix are shown', () => {
    cy.contains('DJ')
});