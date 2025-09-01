### When updating:
After generating client with Jane, date format `'Y-m-d\TH:i:sP'` needs to be replaced with `'Y-m-d\TH:i:s.u\Z'`
otherwise parsing breaks because their openapi schema is not very well made
