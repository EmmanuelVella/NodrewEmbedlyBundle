Embedly Bundle for Symfony2
================================

For use with the Embedly service at: http://www.embedly.com

__Under Development__

Installation Instructions
=========================

Add these blocks to the following files

*deps*

```
[PhpAirbrakeBundle]
    git=http://github.com/nodrew/EmbedlyBundle.git
    target=/bundles/NoDrew/Bundle/EmbedlyBundle
```

*app/autoload.php*

```
$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    ...
    'NoDrew'   => __DIR__.'/../vendor/bundles',
    ...
));
```

*app/AppKernel.php*

```
public function registerBundles()
{
    $bundles = array(
        // System Bundles
        ...
        new NoDrew\Bundle\EmbedlyBundle\NoDrewEmbedlyBundle(),
        ...
    );
}
```

*app/config/config.yml*

```
no_drew_embedly:
    key:   [your api key]
```