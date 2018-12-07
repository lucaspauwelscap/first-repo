Feature: Client wants to visit Google.com and search for Martin Garrix
  In order to view something of Martin Garrix
  The client
  Has to visit Google, type Martin Garrix in the search box and click Google search

Scenario: Visit Google.com and search on Martin Garrix
  Given I visit Google.be
  When I type Martin Garrix in the Google search box
  When I click on the Google search button
  Then Results for martin garrix are shown