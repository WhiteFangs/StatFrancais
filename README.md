# StatFrançais

A Twitter bot that tweets statistics about French people found on Google

The Twitter bot is [@StatFrancais](https://twitter.com/StatFrancais)

## Process
It looks for pages with titles that include "Un/1 Français sur X" or "X% des Français", X being a number, and tweets them after some cleaning.

## Use
It uses the [Google Custom Search JSON API](https://developers.google.com/custom-search/json-api/v1/overview).

When creating a Google Custom Search Engine, Google forces you to add websites to search in specifically.
To be able to search the entire web, do the following:
  1. Add a random website on the site search field when creating your Custom Search Engine
  2. In the configuration panel, choose the option "*Search the entire web but emphasize included sites*"
  3. Remove the random website you added at the beginning from the list

## License
The source code of this bot is available under the terms of the [MIT license](http://www.opensource.org/licenses/mit-license.php).
