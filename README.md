# Git
Restore specific files to specific commit (~1 one before that)
```bash
git checkout c5f567~1 -- file1/to/restore file2/to/restore
```

# Pacman
Find out which package provides a file `pkgfile somefile`

List files installed by a package `pacman -Ql package`

# Python
```python
format(int("F",16),'b')
```

# VBox
```bash
chmod 666 /dev/sda
VBoxManage createmedium disk --filename sda.vmdk --format=VMDK --variant RawDisk --property RawDrive=/dev/sda
```
Add it as a drive in the vm properties.

# NVChad
disable autocomplete `.config/nvim/lua/plugins/init.lua`
```lua
{
  require('cmp').setup { enabled = false }
}
```
e.g.
```lua
return {
  {
    "stevearc/conform.nvim",
    -- event = 'BufWritePre', -- uncomment for format on save
    opts = require "configs.conform",
  },

  -- These are some examples, uncomment them if you want to see them work!
  {
    "neovim/nvim-lspconfig",
    config = function()
      require "configs.lspconfig"
    end,
  },

  {
    require('cmp').setup { enabled = false }
  },

  -- {
  -- 	"nvim-treesitter/nvim-treesitter",
  -- 	opts = {
  -- 		ensure_installed = {
  -- 			"vim", "lua", "vimdoc",
  --      "html", "css"
  -- 		},
  -- 	},
  -- },
}
```

# Bash
```bash
column -t -s ":" -N USERNAME,PW,UID,GUID,COMMENT,HOME,INTERPRETER -H PW /etc/passwd -J -n passwd
```

# Brave
Manage search engines > add with url containing %s e.g. `https://searx.be/search?q=%s` > gets promoted > can set as default.

# i3
`xprop` to identify the WM_CLASS
```
for_window [class="XTerm"] floating enable
```
```
for_window [instance="Godot_Engine"] floating enable
for_window [instance="Godot_Editor"] floating disable
```

# Dude
> "The thing is… (Joe leans into the mic) fat isn't the problem. Carbs and sugar is the problem. Ever eat nuts man? Nuts are good for you."

> Guest "uh… Yeah I eat nuts. I used to pick peanuts back when I was a kid and they were in the season."

> Joe: "Nice, nice. Like from a tree?"

> Guest: "No, they grow in the ground."

> (Joe nearly shits himself in surprise) "What?"

> (His guest try not to sound condescending)

> Guest: Peanuts grow in the ground kind of like-

> Joe: "Jamie, Google this right now. Jamie Google peanuts growing in the ground. HOLY SHIT."

> Guest: "Yeah, just like that. They grow in the ground like potatoes."

> Joe: "Well… (Breaths heavily into the mic) That makes sense. They couldn't grow on trees because squirrels would fuck them up. Imagine that? Imagine how much squirrels would fuck up a peanut tree. Squirrels are basically tiny chimpanzees."


```
Arch on the desktop, sleek and so light, Debian on servers, running just right. Windows let the rays shine in through wall, Apple in my tummy, the tastiest of all.
```

```
When I was 4 years old, or so my mother tells me, I saw another kid biting his nails. As people have a tendency to do, I mimicked the behaviour. My mom would slap my hand away from my mouth and say "stop biting your nails"!

So for my entire life I continued to bite my nails. At times, when I was particularly stressed they would be little stubs on the end of my fingers. I did make a conscious effort to stop a few times; I bought a bitter nail varnish advertised to assist in the effort, but I got used to it and chomped away.

In February of 2023 I had what most people would describe as a religious experience. I wouldn't call it that, but it was a very powerful event that shifted my mindset on a fundamental level. A week or so after my mind being blown wide open I realised that I had long nails, dirty long nails that I needed to clean. A new experience.
```

Short of the long, pun intended, I just poked myself in the eye. Picking my nose is painful. 
