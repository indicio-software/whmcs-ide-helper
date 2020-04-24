<?php

namespace WHMCS\Module;
class Autoloader
{

    protected $baseModulePath = "";

    protected $moduleTypes = "";

    public static function register(
        $loader
    )
    {
    }

    public static function unregister(
        $loader
    )
    {
    }

    public function moduleClassLoader(
        $className
    )
    {
    }

    public function getBaseModulePath()
    {
    }

    public function getModuleTypes()
    {
    }

    public function getClassParts(
        $className
    )
    {
    }

    protected function splitAtUppercase(
        $string
    )
    {
    }

    public function getModuleDirectoryNames(
        $moduleName
    )
    {
    }

    public function getModuleIncludePaths(
        $moduleType,
        $moduleName,
        $relativeClassParts
    )
    {
    }
}

namespace WHMCS\Utility;
class ErrorManagement
{

    protected $runner = "";

    protected $deferredHandlers = "";

    public function __construct(
        $runner
    )
    {
    }

    public static function performErrorReportingSanityCheck()
    {
    }

    public function getRunner()
    {
    }

    public static function factoryRunner()
    {
    }

    public static function boot(
        $runner
    )
    {
    }

    public function loadApplicationHandlers()
    {
    }

    public static function disableIniDisplayErrors()
    {
    }

    public static function enableIniDisplayErrors(
        $setting
    )
    {
    }

    public static function isDisplayErrorCurrentlyVisible()
    {
    }

    public static function setErrorReportingLevel(
        $errorLevel
    )
    {
    }

    public static function supportedErrorLevels()
    {
    }

    public function setErrorLogging(
        $state
    )
    {
    }

    public function isReportingLevelSupported(
        $level
    )
    {
    }

    public static function isAllowedToLogErrors()
    {
    }

    public static function isAllowedToLogSqlErrors()
    {
    }

    public function addDeferredHandler(
        $handler
    )
    {
    }

    public function loadDeferredHandlers()
    {
    }

    public static function distillErrorReportingLevelFromDisplayErrorSetting(
        $setting
    )
    {
    }

    public function applyConfigurationSettings(
        $config
    )
    {
    }
}

namespace WHMCS\Utility\Error;
class Run
{

    private $isRegistered = "";

    private $allowQuit = "";

    private $sendOutput = "";

    private $sendHttpCode = "";

    private $handlerStack = "";

    private $silencedPatterns = "";

    private $system = "";

    private $canThrowExceptions = "";

    public function __construct(
        $system
    )
    {
    }

    public function pushHandler(
        $handler
    )
    {
    }

    public function popHandler()
    {
    }

    public function getHandlers()
    {
    }

    public function clearHandlers()
    {
    }

    private function getInspector(
        $exception
    )
    {
    }

    public function register()
    {
    }

    public function unregister()
    {
    }

    public function allowQuit(
        $exit
    )
    {
    }

    public function silenceErrorsInPaths(
        $patterns,
        $levels
    )
    {
    }

    public function getSilenceErrorsInPaths()
    {
    }

    public function sendHttpCode(
        $code
    )
    {
    }

    public function writeToOutput(
        $send
    )
    {
    }

    public function handleException(
        $exception
    )
    {
    }

    public function handleError(
        $level,
        $message,
        $file,
        $line
    )
    {
    }

    public function handleShutdown()
    {
    }

    private function writeToOutputNow(
        $output
    )
    {
    }
}

namespace WHMCS\Exception\Handler;
class CriticalHtmlHandler
{

    public function handle()
    {
    }

    protected function isActuallyError()
    {
    }

    protected function isActuallyFatalError()
    {
    }

    /**
     * @param RunInterface $run
     */
    public function setRun(
        $run
    )
    {
    }

    /**
     * @return RunInterface
     */
    protected function getRun()
    {
    }

    /**
     * @param Inspector $inspector
     */
    public function setInspector(
        $inspector
    )
    {
    }

    /**
     * @return Inspector
     */
    protected function getInspector()
    {
    }

    /**
     * @param \Throwable $exception
     */
    public function setException(
        $exception
    )
    {
    }

    /**
     * @return \Throwable
     */
    protected function getException()
    {
    }

    public function log(
        $exception
    )
    {
    }
}

namespace WHMCS\Config;
abstract class AbstractConfig
{

    private $defaultValue = "";

    public function __construct(
        $data
    )
    {
    }

    public function setData(
        $data
    )
    {
    }

    public function getData()
    {
    }

    public function setDefaultReturnValue(
        $value
    )
    {
    }

    public function OffsetGet(
        $property
    )
    {
    }

    public function offsetExists(
        $index
    )
    {
    }

    public function offsetSet(
        $index,
        $newval
    )
    {
    }

    public function offsetUnset(
        $index
    )
    {
    }

    public function append(
        $value
    )
    {
    }

    public function getArrayCopy()
    {
    }

    public function count()
    {
    }

    public function getFlags()
    {
    }

    public function setFlags(
        $flags
    )
    {
    }

    public function asort()
    {
    }

    public function ksort()
    {
    }

    public function uasort(
        $cmp_function
    )
    {
    }

    public function uksort(
        $cmp_function
    )
    {
    }

    public function natsort()
    {
    }

    public function natcasesort()
    {
    }

    public function unserialize(
        $serialized
    )
    {
    }

    public function serialize()
    {
    }

    public function getIterator()
    {
    }

    public function exchangeArray(
        $array
    )
    {
    }

    public function setIteratorClass(
        $iteratorClass
    )
    {
    }

    public function getIteratorClass()
    {
    }
}

namespace WHMCS\Config;
class RuntimeStorage
{

    public function __construct(
        $data
    )
    {
    }

    public function setData(
        $data
    )
    {
    }

    public function getData()
    {
    }

    public function setDefaultReturnValue(
        $value
    )
    {
    }

    public function OffsetGet(
        $property
    )
    {
    }

    public function offsetExists(
        $index
    )
    {
    }

    public function offsetSet(
        $index,
        $newval
    )
    {
    }

    public function offsetUnset(
        $index
    )
    {
    }

    public function append(
        $value
    )
    {
    }

    public function getArrayCopy()
    {
    }

    public function count()
    {
    }

    public function getFlags()
    {
    }

    public function setFlags(
        $flags
    )
    {
    }

    public function asort()
    {
    }

    public function ksort()
    {
    }

    public function uasort(
        $cmp_function
    )
    {
    }

    public function uksort(
        $cmp_function
    )
    {
    }

    public function natsort()
    {
    }

    public function natcasesort()
    {
    }

    public function unserialize(
        $serialized
    )
    {
    }

    public function serialize()
    {
    }

    public function getIterator()
    {
    }

    public function exchangeArray(
        $array
    )
    {
    }

    public function setIteratorClass(
        $iteratorClass
    )
    {
    }

    public function getIteratorClass()
    {
    }
}

namespace WHMCS\Utility\Bootstrap;
abstract class AbstractBootstrap
{

    protected static function checkBareMinimumRequirements()
    {
    }

    public static function boot()
    {
    }

    protected static function facadeDiContainer(
        $container
    )
    {
    }

    protected static function factoryContainer()
    {
    }

    public static function registerServices(
        $container,
        $servicesToRegister
    )
    {
    }

    protected static function bindSingletons(
        $container,
        $singletonsToBind
    )
    {
    }

    protected static function bindInstances(
        $container,
        $instancesToBind
    )
    {
    }

    protected static function defineClassAliases(
        $classAliases
    )
    {
    }

    public static function getSingletons()
    {
    }

    public static function getServices()
    {
    }

    public static function getAliases()
    {
    }
}

namespace WHMCS\Utility\Bootstrap;
class Application
{

    public static function boot(
        $preBootInstances
    )
    {
    }

    public static function verifyInstallerIsAbsent()
    {
    }

    public static function persistSession()
    {
    }

    public static function getAliases()
    {
    }

    public static function getInstances()
    {
    }

    public static function getSingletons()
    {
    }

    public static function getServices()
    {
    }

    protected static function checkBareMinimumRequirements()
    {
    }

    protected static function facadeDiContainer(
        $container
    )
    {
    }

    protected static function factoryContainer()
    {
    }

    public static function registerServices(
        $container,
        $servicesToRegister
    )
    {
    }

    protected static function bindSingletons(
        $container,
        $singletonsToBind
    )
    {
    }

    protected static function bindInstances(
        $container,
        $instancesToBind
    )
    {
    }

    protected static function defineClassAliases(
        $classAliases
    )
    {
    }
}

namespace WHMCS;
class Container
{

    protected $serviceProviders = "";
    /**
     * The current globally available container (if any).
     *
     * @var static
     */
    protected static $instance = "";
    /**
     * An array of the types that have been resolved.
     *
     * @var array
     */
    protected $resolved = "";
    /**
     * The container's bindings.
     *
     * @var array
     */
    protected $bindings = "";
    /**
     * The container's shared instances.
     *
     * @var array
     */
    protected $instances = "";
    /**
     * The registered type aliases.
     *
     * @var array
     */
    protected $aliases = "";
    /**
     * The extension closures for services.
     *
     * @var array
     */
    protected $extenders = "";
    /**
     * All of the registered tags.
     *
     * @var array
     */
    protected $tags = "";
    /**
     * The stack of concretions currently being built.
     *
     * @var array
     */
    protected $buildStack = "";
    /**
     * The contextual binding map.
     *
     * @var array
     */
    public $contextual = "";
    /**
     * All of the registered rebound callbacks.
     *
     * @var array
     */
    protected $reboundCallbacks = "";
    /**
     * All of the global resolving callbacks.
     *
     * @var array
     */
    protected $globalResolvingCallbacks = "";
    /**
     * All of the global after resolving callbacks.
     *
     * @var array
     */
    protected $globalAfterResolvingCallbacks = "";
    /**
     * All of the resolving callbacks by class type.
     *
     * @var array
     */
    protected $resolvingCallbacks = "";
    /**
     * All of the after resolving callbacks by class type.
     *
     * @var array
     */
    protected $afterResolvingCallbacks = "";

    public function environment()
    {
    }

    public function isDownForMaintenance()
    {
    }

    public function call(
        $callback,
        $parameters,
        $defaultMethod
    )
    {
    }

    public function register(
        $serviceProvider
    )
    {
    }

    public function get(
        $id
    )
    {
    }

    public function has(
        $id
    )
    {
    }

    /**
     * Define a contextual binding.
     *
     * @param string $concrete
     * @return \Illuminate\Contracts\Container\ContextualBindingBuilder
     */
    public function when(
        $concrete
    )
    {
    }

    /**
     * Determine if the given abstract type has been bound.
     *
     * @param string $abstract
     * @return bool
     */
    public function bound(
        $abstract
    )
    {
    }

    /**
     * Determine if the given abstract type has been resolved.
     *
     * @param string $abstract
     * @return bool
     */
    public function resolved(
        $abstract
    )
    {
    }

    /**
     * Determine if a given string is an alias.
     *
     * @param string $name
     * @return bool
     */
    public function isAlias(
        $name
    )
    {
    }

    /**
     * Register a binding with the container.
     *
     * @param string|array $abstract
     * @param \Closure|string|null $concrete
     * @param bool $shared
     * @return void
     */
    public function bind(
        $abstract,
        $concrete,
        $shared
    )
    {
    }

    /**
     * Get the Closure to be used when building a type.
     *
     * @param string $abstract
     * @param string $concrete
     * @return \Closure
     */
    protected function getClosure(
        $abstract,
        $concrete
    )
    {
    }

    /**
     * Add a contextual binding to the container.
     *
     * @param string $concrete
     * @param string $abstract
     * @param \Closure|string $implementation
     * @return void
     */
    public function addContextualBinding(
        $concrete,
        $abstract,
        $implementation
    )
    {
    }

    /**
     * Register a binding if it hasn't already been registered.
     *
     * @param string $abstract
     * @param \Closure|string|null $concrete
     * @param bool $shared
     * @return void
     */
    public function bindIf(
        $abstract,
        $concrete,
        $shared
    )
    {
    }

    /**
     * Register a shared binding in the container.
     *
     * @param string|array $abstract
     * @param \Closure|string|null $concrete
     * @return void
     */
    public function singleton(
        $abstract,
        $concrete
    )
    {
    }

    /**
     * Wrap a Closure such that it is shared.
     *
     * @param \Closure $closure
     * @return \Closure
     */
    public function share(
        $closure
    )
    {
    }

    /**
     * "Extend" an abstract type in the container.
     *
     * @param string $abstract
     * @param \Closure $closure
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function extend(
        $abstract,
        $closure
    )
    {
    }

    /**
     * Register an existing instance as shared in the container.
     *
     * @param string $abstract
     * @param mixed $instance
     * @return void
     */
    public function instance(
        $abstract,
        $instance
    )
    {
    }

    /**
     * Assign a set of tags to a given binding.
     *
     * @param array|string $abstracts
     * @param array|mixed ...$tags
     * @return void
     */
    public function tag(
        $abstracts,
        $tags
    )
    {
    }

    /**
     * Resolve all of the bindings for a given tag.
     *
     * @param string $tag
     * @return array
     */
    public function tagged(
        $tag
    )
    {
    }

    /**
     * Alias a type to a different name.
     *
     * @param string $abstract
     * @param string $alias
     * @return void
     */
    public function alias(
        $abstract,
        $alias
    )
    {
    }

    /**
     * Extract the type and alias from a given definition.
     *
     * @param array $definition
     * @return array
     */
    protected function extractAlias(
        $definition
    )
    {
    }

    /**
     * Bind a new callback to an abstract's rebind event.
     *
     * @param string $abstract
     * @param \Closure $callback
     * @return mixed
     */
    public function rebinding(
        $abstract,
        $callback
    )
    {
    }

    /**
     * Refresh an instance on the given target and method.
     *
     * @param string $abstract
     * @param mixed $target
     * @param string $method
     * @return mixed
     */
    public function refresh(
        $abstract,
        $target,
        $method
    )
    {
    }

    /**
     * Fire the "rebound" callbacks for the given abstract type.
     *
     * @param string $abstract
     * @return void
     */
    protected function rebound(
        $abstract
    )
    {
    }

    /**
     * Get the rebound callbacks for a given type.
     *
     * @param string $abstract
     * @return array
     */
    protected function getReboundCallbacks(
        $abstract
    )
    {
    }

    /**
     * Wrap the given closure such that its dependencies will be injected when executed.
     *
     * @param \Closure $callback
     * @param array $parameters
     * @return \Closure
     */
    public function wrap(
        $callback,
        $parameters
    )
    {
    }

    /**
     * Determine if the given string is in Class@method syntax.
     *
     * @param mixed $callback
     * @return bool
     */
    protected function isCallableWithAtSign(
        $callback
    )
    {
    }

    /**
     * Get all dependencies for a given method.
     *
     * @param callable|string $callback
     * @param array $parameters
     * @return array
     */
    protected function getMethodDependencies(
        $callback,
        $parameters
    )
    {
    }

    /**
     * Get the proper reflection instance for the given callback.
     *
     * @param callable|string $callback
     * @return \ReflectionFunctionAbstract
     */
    protected function getCallReflector(
        $callback
    )
    {
    }

    /**
     * Get the dependency for the given call parameter.
     *
     * @param \ReflectionParameter $parameter
     * @param array $parameters
     * @param array $dependencies
     * @return mixed
     */
    protected function addDependencyForCallParameter(
        $parameter,
        $parameters,
        $dependencies
    )
    {
    }

    /**
     * Call a string reference to a class using Class@method syntax.
     *
     * @param string $target
     * @param array $parameters
     * @param string|null $defaultMethod
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    protected function callClass(
        $target,
        $parameters,
        $defaultMethod
    )
    {
    }

    /**
     * Resolve the given type from the container.
     *
     * @param string $abstract
     * @param array $parameters
     * @return mixed
     */
    public function make(
        $abstract,
        $parameters
    )
    {
    }

    /**
     * Get the concrete type for a given abstract.
     *
     * @param string $abstract
     * @return mixed   $concrete
     */
    protected function getConcrete(
        $abstract
    )
    {
    }

    /**
     * Get the contextual concrete binding for the given abstract.
     *
     * @param string $abstract
     * @return string|null
     */
    protected function getContextualConcrete(
        $abstract
    )
    {
    }

    /**
     * Normalize the given class name by removing leading slashes.
     *
     * @param mixed $service
     * @return mixed
     */
    protected function normalize(
        $service
    )
    {
    }

    /**
     * Get the extender callbacks for a given type.
     *
     * @param string $abstract
     * @return array
     */
    protected function getExtenders(
        $abstract
    )
    {
    }

    /**
     * Instantiate a concrete instance of the given type.
     *
     * @param string $concrete
     * @param array $parameters
     * @return mixed
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function build(
        $concrete,
        $parameters
    )
    {
    }

    /**
     * Resolve all of the dependencies from the ReflectionParameters.
     *
     * @param array $parameters
     * @param array $primitives
     * @return array
     */
    protected function getDependencies(
        $parameters,
        $primitives
    )
    {
    }

    /**
     * Resolve a non-class hinted dependency.
     *
     * @param \ReflectionParameter $parameter
     * @return mixed
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function resolveNonClass(
        $parameter
    )
    {
    }

    /**
     * Resolve a class based dependency from the container.
     *
     * @param \ReflectionParameter $parameter
     * @return mixed
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function resolveClass(
        $parameter
    )
    {
    }

    /**
     * If extra parameters are passed by numeric ID, rekey them by argument name.
     *
     * @param array $dependencies
     * @param array $parameters
     * @return array
     */
    protected function keyParametersByArgument(
        $dependencies,
        $parameters
    )
    {
    }

    /**
     * Register a new resolving callback.
     *
     * @param string $abstract
     * @param \Closure|null $callback
     * @return void
     */
    public function resolving(
        $abstract,
        $callback
    )
    {
    }

    /**
     * Register a new after resolving callback for all types.
     *
     * @param string $abstract
     * @param \Closure|null $callback
     * @return void
     */
    public function afterResolving(
        $abstract,
        $callback
    )
    {
    }

    /**
     * Register a new resolving callback by type of its first argument.
     *
     * @param \Closure $callback
     * @return void
     */
    protected function resolvingCallback(
        $callback
    )
    {
    }

    /**
     * Register a new after resolving callback by type of its first argument.
     *
     * @param \Closure $callback
     * @return void
     */
    protected function afterResolvingCallback(
        $callback
    )
    {
    }

    /**
     * Get the type hint for this closure's first argument.
     *
     * @param \Closure $callback
     * @return mixed
     */
    protected function getFunctionHint(
        $callback
    )
    {
    }

    /**
     * Fire all of the resolving callbacks.
     *
     * @param string $abstract
     * @param mixed $object
     * @return void
     */
    protected function fireResolvingCallbacks(
        $abstract,
        $object
    )
    {
    }

    /**
     * Get all callbacks for a given type.
     *
     * @param string $abstract
     * @param object $object
     * @param array $callbacksPerType
     *
     * @return array
     */
    protected function getCallbacksForType(
        $abstract,
        $object,
        $callbacksPerType
    )
    {
    }

    /**
     * Fire an array of callbacks with an object.
     *
     * @param mixed $object
     * @param array $callbacks
     * @return void
     */
    protected function fireCallbackArray(
        $object,
        $callbacks
    )
    {
    }

    /**
     * Determine if a given type is shared.
     *
     * @param string $abstract
     * @return bool
     */
    public function isShared(
        $abstract
    )
    {
    }

    /**
     * Determine if the given concrete is buildable.
     *
     * @param mixed $concrete
     * @param string $abstract
     * @return bool
     */
    protected function isBuildable(
        $concrete,
        $abstract
    )
    {
    }

    /**
     * Get the alias for an abstract if available.
     *
     * @param string $abstract
     * @return string
     */
    protected function getAlias(
        $abstract
    )
    {
    }

    /**
     * Get the container's bindings.
     *
     * @return array
     */
    public function getBindings()
    {
    }

    /**
     * Drop all of the stale instances and aliases.
     *
     * @param string $abstract
     * @return void
     */
    protected function dropStaleInstances(
        $abstract
    )
    {
    }

    /**
     * Remove a resolved instance from the instance cache.
     *
     * @param string $abstract
     * @return void
     */
    public function forgetInstance(
        $abstract
    )
    {
    }

    /**
     * Clear all of the instances from the container.
     *
     * @return void
     */
    public function forgetInstances()
    {
    }

    /**
     * Flush the container of all bindings and resolved instances.
     *
     * @return void
     */
    public function flush()
    {
    }

    /**
     * Set the globally available instance of the container.
     *
     * @return static
     */
    public static function getInstance()
    {
    }

    /**
     * Set the shared instance of the container.
     *
     * @param \Illuminate\Contracts\Container\Container $container
     * @return void
     */
    public static function setInstance(
        $container
    )
    {
    }

    /**
     * Determine if a given offset exists.
     *
     * @param string $key
     * @return bool
     */
    public function offsetExists(
        $key
    )
    {
    }

    /**
     * Get the value at a given offset.
     *
     * @param string $key
     * @return mixed
     */
    public function offsetGet(
        $key
    )
    {
    }

    /**
     * Set the value at a given offset.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function offsetSet(
        $key,
        $value
    )
    {
    }

    /**
     * Unset the value at a given offset.
     *
     * @param string $key
     * @return void
     */
    public function offsetUnset(
        $key
    )
    {
    }

    /**
     * Dynamically access container services.
     *
     * @param string $key
     * @return mixed
     */
    public function __get(
        $key
    )
    {
    }

    /**
     * Dynamically set container services.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function __set(
        $key,
        $value
    )
    {
    }
}

namespace WHMCS\Application\Support\Facades;
class Di
{
    /**
     * The application instance being facaded.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected static $app = "";
    /**
     * The resolved object instances.
     *
     * @var array
     */
    protected static $resolvedInstance = "";

    protected static function getFacadeAccessor()
    {
    }

    /**
     * Hotswap the underlying instance behind the facade.
     *
     * @param mixed $instance
     * @return void
     */
    public static function swap(
        $instance
    )
    {
    }

    /**
     * Initiate a mock expectation on the facade.
     *
     * @param mixed
     * @return \Mockery\Expectation
     */
    public static function shouldReceive()
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createFreshMockInstance(
        $name
    )
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createMockByName(
        $name
    )
    {
    }

    /**
     * Determines whether a mock is set as the instance of the facade.
     *
     * @return bool
     */
    protected static function isMock()
    {
    }

    /**
     * Get the mockable class for the bound instance.
     *
     * @return string|null
     */
    protected static function getMockableClass()
    {
    }

    /**
     * Get the root object behind the facade.
     *
     * @return mixed
     */
    public static function getFacadeRoot()
    {
    }

    /**
     * Resolve the facade root instance from the container.
     *
     * @param string|object $name
     * @return mixed
     */
    protected static function resolveFacadeInstance(
        $name
    )
    {
    }

    /**
     * Clear a resolved facade instance.
     *
     * @param string $name
     * @return void
     */
    public static function clearResolvedInstance(
        $name
    )
    {
    }

    /**
     * Clear all of the resolved instances.
     *
     * @return void
     */
    public static function clearResolvedInstances()
    {
    }

    /**
     * Get the application instance behind the facade.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public static function getFacadeApplication()
    {
    }

    /**
     * Set the application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public static function setFacadeApplication(
        $app
    )
    {
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $method
     * @param array $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic(
        $method,
        $args
    )
    {
    }
}

namespace WHMCS\Application\Support\Facades;
class Facade
{
    /**
     * The application instance being facaded.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected static $app = "";
    /**
     * The resolved object instances.
     *
     * @var array
     */
    protected static $resolvedInstance = "";

    public static function self()
    {
    }

    /**
     * Hotswap the underlying instance behind the facade.
     *
     * @param mixed $instance
     * @return void
     */
    public static function swap(
        $instance
    )
    {
    }

    /**
     * Initiate a mock expectation on the facade.
     *
     * @param mixed
     * @return \Mockery\Expectation
     */
    public static function shouldReceive()
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createFreshMockInstance(
        $name
    )
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createMockByName(
        $name
    )
    {
    }

    /**
     * Determines whether a mock is set as the instance of the facade.
     *
     * @return bool
     */
    protected static function isMock()
    {
    }

    /**
     * Get the mockable class for the bound instance.
     *
     * @return string|null
     */
    protected static function getMockableClass()
    {
    }

    /**
     * Get the root object behind the facade.
     *
     * @return mixed
     */
    public static function getFacadeRoot()
    {
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
    }

    /**
     * Resolve the facade root instance from the container.
     *
     * @param string|object $name
     * @return mixed
     */
    protected static function resolveFacadeInstance(
        $name
    )
    {
    }

    /**
     * Clear a resolved facade instance.
     *
     * @param string $name
     * @return void
     */
    public static function clearResolvedInstance(
        $name
    )
    {
    }

    /**
     * Clear all of the resolved instances.
     *
     * @return void
     */
    public static function clearResolvedInstances()
    {
    }

    /**
     * Get the application instance behind the facade.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public static function getFacadeApplication()
    {
    }

    /**
     * Set the application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public static function setFacadeApplication(
        $app
    )
    {
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $method
     * @param array $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic(
        $method,
        $args
    )
    {
    }
}

namespace WHMCS\Application\Support\Facades;
class Log
{
    /**
     * The application instance being facaded.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected static $app = "";
    /**
     * The resolved object instances.
     *
     * @var array
     */
    protected static $resolvedInstance = "";

    protected static function getFacadeAccessor()
    {
    }

    public static function self()
    {
    }

    /**
     * Hotswap the underlying instance behind the facade.
     *
     * @param mixed $instance
     * @return void
     */
    public static function swap(
        $instance
    )
    {
    }

    /**
     * Initiate a mock expectation on the facade.
     *
     * @param mixed
     * @return \Mockery\Expectation
     */
    public static function shouldReceive()
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createFreshMockInstance(
        $name
    )
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createMockByName(
        $name
    )
    {
    }

    /**
     * Determines whether a mock is set as the instance of the facade.
     *
     * @return bool
     */
    protected static function isMock()
    {
    }

    /**
     * Get the mockable class for the bound instance.
     *
     * @return string|null
     */
    protected static function getMockableClass()
    {
    }

    /**
     * Get the root object behind the facade.
     *
     * @return mixed
     */
    public static function getFacadeRoot()
    {
    }

    /**
     * Resolve the facade root instance from the container.
     *
     * @param string|object $name
     * @return mixed
     */
    protected static function resolveFacadeInstance(
        $name
    )
    {
    }

    /**
     * Clear a resolved facade instance.
     *
     * @param string $name
     * @return void
     */
    public static function clearResolvedInstance(
        $name
    )
    {
    }

    /**
     * Clear all of the resolved instances.
     *
     * @return void
     */
    public static function clearResolvedInstances()
    {
    }

    /**
     * Get the application instance behind the facade.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public static function getFacadeApplication()
    {
    }

    /**
     * Set the application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public static function setFacadeApplication(
        $app
    )
    {
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $method
     * @param array $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic(
        $method,
        $args
    )
    {
    }
}

namespace WHMCS\Application\Support\Facades;
class Menu
{
    /**
     * The application instance being facaded.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected static $app = "";
    /**
     * The resolved object instances.
     *
     * @var array
     */
    protected static $resolvedInstance = "";

    protected static function getFacadeAccessor()
    {
    }

    public static function self()
    {
    }

    /**
     * Hotswap the underlying instance behind the facade.
     *
     * @param mixed $instance
     * @return void
     */
    public static function swap(
        $instance
    )
    {
    }

    /**
     * Initiate a mock expectation on the facade.
     *
     * @param mixed
     * @return \Mockery\Expectation
     */
    public static function shouldReceive()
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createFreshMockInstance(
        $name
    )
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createMockByName(
        $name
    )
    {
    }

    /**
     * Determines whether a mock is set as the instance of the facade.
     *
     * @return bool
     */
    protected static function isMock()
    {
    }

    /**
     * Get the mockable class for the bound instance.
     *
     * @return string|null
     */
    protected static function getMockableClass()
    {
    }

    /**
     * Get the root object behind the facade.
     *
     * @return mixed
     */
    public static function getFacadeRoot()
    {
    }

    /**
     * Resolve the facade root instance from the container.
     *
     * @param string|object $name
     * @return mixed
     */
    protected static function resolveFacadeInstance(
        $name
    )
    {
    }

    /**
     * Clear a resolved facade instance.
     *
     * @param string $name
     * @return void
     */
    public static function clearResolvedInstance(
        $name
    )
    {
    }

    /**
     * Clear all of the resolved instances.
     *
     * @return void
     */
    public static function clearResolvedInstances()
    {
    }

    /**
     * Get the application instance behind the facade.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public static function getFacadeApplication()
    {
    }

    /**
     * Set the application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public static function setFacadeApplication(
        $app
    )
    {
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $method
     * @param array $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic(
        $method,
        $args
    )
    {
    }
}

namespace WHMCS\Log;
class Activity
{

    protected $criteria = "";

    protected $outputFormatting = "";

    public function setOutputFormatting(
        $enable
    )
    {
    }

    public function getOutputFormatting()
    {
    }

    public function prune()
    {
    }

    public function setCriteria(
        $where
    )
    {
    }

    public function getCriteria(
        $key
    )
    {
    }

    protected function buildCriteria()
    {
    }

    public function getTotalCount()
    {
    }

    public function getLogEntries(
        $page,
        $limit
    )
    {
    }

    public function autoLink(
        $description
    )
    {
    }
}

namespace WHMCS\Application\Support\Facades;
class Config
{
    /**
     * The application instance being facaded.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected static $app = "";
    /**
     * The resolved object instances.
     *
     * @var array
     */
    protected static $resolvedInstance = "";

    protected static function getFacadeAccessor()
    {
    }

    public static function self()
    {
    }

    /**
     * Hotswap the underlying instance behind the facade.
     *
     * @param mixed $instance
     * @return void
     */
    public static function swap(
        $instance
    )
    {
    }

    /**
     * Initiate a mock expectation on the facade.
     *
     * @param mixed
     * @return \Mockery\Expectation
     */
    public static function shouldReceive()
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createFreshMockInstance(
        $name
    )
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createMockByName(
        $name
    )
    {
    }

    /**
     * Determines whether a mock is set as the instance of the facade.
     *
     * @return bool
     */
    protected static function isMock()
    {
    }

    /**
     * Get the mockable class for the bound instance.
     *
     * @return string|null
     */
    protected static function getMockableClass()
    {
    }

    /**
     * Get the root object behind the facade.
     *
     * @return mixed
     */
    public static function getFacadeRoot()
    {
    }

    /**
     * Resolve the facade root instance from the container.
     *
     * @param string|object $name
     * @return mixed
     */
    protected static function resolveFacadeInstance(
        $name
    )
    {
    }

    /**
     * Clear a resolved facade instance.
     *
     * @param string $name
     * @return void
     */
    public static function clearResolvedInstance(
        $name
    )
    {
    }

    /**
     * Clear all of the resolved instances.
     *
     * @return void
     */
    public static function clearResolvedInstances()
    {
    }

    /**
     * Get the application instance behind the facade.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public static function getFacadeApplication()
    {
    }

    /**
     * Set the application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public static function setFacadeApplication(
        $app
    )
    {
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $method
     * @param array $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic(
        $method,
        $args
    )
    {
    }
}

namespace WHMCS\Application\Support\Facades;
class App
{
    /**
     * The application instance being facaded.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected static $app = "";
    /**
     * The resolved object instances.
     *
     * @var array
     */
    protected static $resolvedInstance = "";

    protected static function getFacadeAccessor()
    {
    }

    public static function self()
    {
    }

    /**
     * Hotswap the underlying instance behind the facade.
     *
     * @param mixed $instance
     * @return void
     */
    public static function swap(
        $instance
    )
    {
    }

    /**
     * Initiate a mock expectation on the facade.
     *
     * @param mixed
     * @return \Mockery\Expectation
     */
    public static function shouldReceive()
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createFreshMockInstance(
        $name
    )
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createMockByName(
        $name
    )
    {
    }

    /**
     * Determines whether a mock is set as the instance of the facade.
     *
     * @return bool
     */
    protected static function isMock()
    {
    }

    /**
     * Get the mockable class for the bound instance.
     *
     * @return string|null
     */
    protected static function getMockableClass()
    {
    }

    /**
     * Get the root object behind the facade.
     *
     * @return mixed
     */
    public static function getFacadeRoot()
    {
    }

    /**
     * Resolve the facade root instance from the container.
     *
     * @param string|object $name
     * @return mixed
     */
    protected static function resolveFacadeInstance(
        $name
    )
    {
    }

    /**
     * Clear a resolved facade instance.
     *
     * @param string $name
     * @return void
     */
    public static function clearResolvedInstance(
        $name
    )
    {
    }

    /**
     * Clear all of the resolved instances.
     *
     * @return void
     */
    public static function clearResolvedInstances()
    {
    }

    /**
     * Get the application instance behind the facade.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public static function getFacadeApplication()
    {
    }

    /**
     * Set the application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public static function setFacadeApplication(
        $app
    )
    {
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $method
     * @param array $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic(
        $method,
        $args
    )
    {
    }
}

namespace WHMCS\Application\Support\Facades;
class Lang
{
    /**
     * The application instance being facaded.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected static $app = "";
    /**
     * The resolved object instances.
     *
     * @var array
     */
    protected static $resolvedInstance = "";

    protected static function getFacadeAccessor()
    {
    }

    public static function self()
    {
    }

    /**
     * Hotswap the underlying instance behind the facade.
     *
     * @param mixed $instance
     * @return void
     */
    public static function swap(
        $instance
    )
    {
    }

    /**
     * Initiate a mock expectation on the facade.
     *
     * @param mixed
     * @return \Mockery\Expectation
     */
    public static function shouldReceive()
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createFreshMockInstance(
        $name
    )
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createMockByName(
        $name
    )
    {
    }

    /**
     * Determines whether a mock is set as the instance of the facade.
     *
     * @return bool
     */
    protected static function isMock()
    {
    }

    /**
     * Get the mockable class for the bound instance.
     *
     * @return string|null
     */
    protected static function getMockableClass()
    {
    }

    /**
     * Get the root object behind the facade.
     *
     * @return mixed
     */
    public static function getFacadeRoot()
    {
    }

    /**
     * Resolve the facade root instance from the container.
     *
     * @param string|object $name
     * @return mixed
     */
    protected static function resolveFacadeInstance(
        $name
    )
    {
    }

    /**
     * Clear a resolved facade instance.
     *
     * @param string $name
     * @return void
     */
    public static function clearResolvedInstance(
        $name
    )
    {
    }

    /**
     * Clear all of the resolved instances.
     *
     * @return void
     */
    public static function clearResolvedInstances()
    {
    }

    /**
     * Get the application instance behind the facade.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public static function getFacadeApplication()
    {
    }

    /**
     * Set the application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public static function setFacadeApplication(
        $app
    )
    {
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $method
     * @param array $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic(
        $method,
        $args
    )
    {
    }
}

namespace WHMCS\Application\Support\Facades;
class AdminLang
{
    /**
     * The application instance being facaded.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected static $app = "";
    /**
     * The resolved object instances.
     *
     * @var array
     */
    protected static $resolvedInstance = "";

    protected static function getFacadeAccessor()
    {
    }

    public static function self()
    {
    }

    /**
     * Hotswap the underlying instance behind the facade.
     *
     * @param mixed $instance
     * @return void
     */
    public static function swap(
        $instance
    )
    {
    }

    /**
     * Initiate a mock expectation on the facade.
     *
     * @param mixed
     * @return \Mockery\Expectation
     */
    public static function shouldReceive()
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createFreshMockInstance(
        $name
    )
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createMockByName(
        $name
    )
    {
    }

    /**
     * Determines whether a mock is set as the instance of the facade.
     *
     * @return bool
     */
    protected static function isMock()
    {
    }

    /**
     * Get the mockable class for the bound instance.
     *
     * @return string|null
     */
    protected static function getMockableClass()
    {
    }

    /**
     * Get the root object behind the facade.
     *
     * @return mixed
     */
    public static function getFacadeRoot()
    {
    }

    /**
     * Resolve the facade root instance from the container.
     *
     * @param string|object $name
     * @return mixed
     */
    protected static function resolveFacadeInstance(
        $name
    )
    {
    }

    /**
     * Clear a resolved facade instance.
     *
     * @param string $name
     * @return void
     */
    public static function clearResolvedInstance(
        $name
    )
    {
    }

    /**
     * Clear all of the resolved instances.
     *
     * @return void
     */
    public static function clearResolvedInstances()
    {
    }

    /**
     * Get the application instance behind the facade.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public static function getFacadeApplication()
    {
    }

    /**
     * Set the application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public static function setFacadeApplication(
        $app
    )
    {
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $method
     * @param array $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic(
        $method,
        $args
    )
    {
    }
}

namespace WHMCS\Application\Support\Facades;
class Storage
{
    /**
     * The application instance being facaded.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected static $app = "";
    /**
     * The resolved object instances.
     *
     * @var array
     */
    protected static $resolvedInstance = "";

    protected static function getFacadeAccessor()
    {
    }

    public static function self()
    {
    }

    /**
     * Hotswap the underlying instance behind the facade.
     *
     * @param mixed $instance
     * @return void
     */
    public static function swap(
        $instance
    )
    {
    }

    /**
     * Initiate a mock expectation on the facade.
     *
     * @param mixed
     * @return \Mockery\Expectation
     */
    public static function shouldReceive()
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createFreshMockInstance(
        $name
    )
    {
    }

    /**
     * Create a fresh mock instance for the given class.
     *
     * @param string $name
     * @return \Mockery\Expectation
     */
    protected static function createMockByName(
        $name
    )
    {
    }

    /**
     * Determines whether a mock is set as the instance of the facade.
     *
     * @return bool
     */
    protected static function isMock()
    {
    }

    /**
     * Get the mockable class for the bound instance.
     *
     * @return string|null
     */
    protected static function getMockableClass()
    {
    }

    /**
     * Get the root object behind the facade.
     *
     * @return mixed
     */
    public static function getFacadeRoot()
    {
    }

    /**
     * Resolve the facade root instance from the container.
     *
     * @param string|object $name
     * @return mixed
     */
    protected static function resolveFacadeInstance(
        $name
    )
    {
    }

    /**
     * Clear a resolved facade instance.
     *
     * @param string $name
     * @return void
     */
    public static function clearResolvedInstance(
        $name
    )
    {
    }

    /**
     * Clear all of the resolved instances.
     *
     * @return void
     */
    public static function clearResolvedInstances()
    {
    }

    /**
     * Get the application instance behind the facade.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public static function getFacadeApplication()
    {
    }

    /**
     * Set the application instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public static function setFacadeApplication(
        $app
    )
    {
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $method
     * @param array $args
     * @return mixed
     *
     * @throws \RuntimeException
     */
    public static function __callStatic(
        $method,
        $args
    )
    {
    }
}

namespace WHMCS\Http\Message;
abstract class AbstractViewableResponse
{

    protected $getBodyFromPrivateStream = "";
    /**
     * List of all registered headers, as key => array of values.
     *
     * @var array
     */
    protected $headers = "";
    /**
     * Map of normalized header name to original name used to register header.
     *
     * @var array
     */
    protected $headerNames = "";

    public function __construct(
        $data,
        $status,
        $headers
    )
    {
    }

    public function getBody()
    {
    }

    abstract protected function getOutputContent();

    /**
     * Create the message body.
     *
     * @param string|StreamInterface $html
     * @return StreamInterface
     * @throws InvalidArgumentException if $html is neither a string or stream.
     */
    private function createBody(
        $html
    )
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getStatusCode()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getReasonPhrase()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function withStatus(
        $code,
        $reasonPhrase
    )
    {
    }

    /**
     * Validate a status code.
     *
     * @param int|string $code
     * @throws InvalidArgumentException on an invalid status code.
     */
    private function setStatusCode(
        $code
    )
    {
    }

    /**
     * Ensure header names and values are valid.
     *
     * @param array $headers
     * @throws InvalidArgumentException
     */
    private function assertHeaders(
        $headers
    )
    {
    }

    /**
     * Retrieves the HTTP protocol version as a string.
     *
     * The string MUST contain only the HTTP version number (e.g., "1.1", "1.0").
     *
     * @return string HTTP protocol version.
     */
    public function getProtocolVersion()
    {
    }

    /**
     * Return an instance with the specified HTTP protocol version.
     *
     * The version string MUST contain only the HTTP version number (e.g.,
     * "1.1", "1.0").
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * new protocol version.
     *
     * @param string $version HTTP protocol version
     * @return static
     */
    public function withProtocolVersion(
        $version
    )
    {
    }

    /**
     * Retrieves all message headers.
     *
     * The keys represent the header name as it will be sent over the wire, and
     * each value is an array of strings associated with the header.
     *
     *     // Represent the headers as a string
     *     foreach ($message->getHeaders() as $name => $values) {
     *         echo $name . ": " . implode(", ", $values);
     *     }
     *
     *     // Emit headers iteratively:
     *     foreach ($message->getHeaders() as $name => $values) {
     *         foreach ($values as $value) {
     *             header(sprintf('%s: %s', $name, $value), false);
     *         }
     *     }
     *
     * @return array Returns an associative array of the message's headers. Each
     *     key MUST be a header name, and each value MUST be an array of strings.
     */
    public function getHeaders()
    {
    }

    /**
     * Checks if a header exists by the given case-insensitive name.
     *
     * @param string $header Case-insensitive header name.
     * @return bool Returns true if any header names match the given header
     *     name using a case-insensitive string comparison. Returns false if
     *     no matching header name is found in the message.
     */
    public function hasHeader(
        $header
    )
    {
    }

    /**
     * Retrieves a message header value by the given case-insensitive name.
     *
     * This method returns an array of all the header values of the given
     * case-insensitive header name.
     *
     * If the header does not appear in the message, this method MUST return an
     * empty array.
     *
     * @param string $header Case-insensitive header field name.
     * @return string[] An array of string values as provided for the given
     *    header. If the header does not appear in the message, this method MUST
     *    return an empty array.
     */
    public function getHeader(
        $header
    )
    {
    }

    /**
     * Retrieves a comma-separated string of the values for a single header.
     *
     * This method returns all of the header values of the given
     * case-insensitive header name as a string concatenated together using
     * a comma.
     *
     * NOTE: Not all header values may be appropriately represented using
     * comma concatenation. For such headers, use getHeader() instead
     * and supply your own delimiter when concatenating.
     *
     * If the header does not appear in the message, this method MUST return
     * an empty string.
     *
     * @param string $name Case-insensitive header field name.
     * @return string A string of values as provided for the given header
     *    concatenated together using a comma. If the header does not appear in
     *    the message, this method MUST return an empty string.
     */
    public function getHeaderLine(
        $name
    )
    {
    }

    /**
     * Return an instance with the provided header, replacing any existing
     * values of any headers with the same case-insensitive name.
     *
     * While header names are case-insensitive, the casing of the header will
     * be preserved by this function, and returned from getHeaders().
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * new and/or updated header and value.
     *
     * @param string $header Case-insensitive header field name.
     * @param string|string[] $value Header value(s).
     * @return static
     * @throws \InvalidArgumentException for invalid header names or values.
     */
    public function withHeader(
        $header,
        $value
    )
    {
    }

    /**
     * Return an instance with the specified header appended with the
     * given value.
     *
     * Existing values for the specified header will be maintained. The new
     * value(s) will be appended to the existing list. If the header did not
     * exist previously, it will be added.
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * new header and/or value.
     *
     * @param string $header Case-insensitive header field name to add.
     * @param string|string[] $value Header value(s).
     * @return static
     * @throws \InvalidArgumentException for invalid header names or values.
     */
    public function withAddedHeader(
        $header,
        $value
    )
    {
    }

    /**
     * Return an instance without the specified header.
     *
     * Header resolution MUST be done without case-sensitivity.
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that removes
     * the named header.
     *
     * @param string $header Case-insensitive header field name to remove.
     * @return static
     */
    public function withoutHeader(
        $header
    )
    {
    }

    /**
     * Return an instance with the specified message body.
     *
     * The body MUST be a StreamInterface object.
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return a new instance that has the
     * new body stream.
     *
     * @param StreamInterface $body Body.
     * @return static
     * @throws \InvalidArgumentException When the body is not valid.
     */
    public function withBody(
        $body
    )
    {
    }

    private function getStream(
        $stream,
        $modeIfNotInstance
    )
    {
    }

    /**
     * Test that an array contains only strings
     *
     * @param array $array
     * @return bool
     */
    private function arrayContainsOnlyStrings(
        $array
    )
    {
    }

    /**
     * Filter a set of headers to ensure they are in the correct internal format.
     *
     * Used by message constructors to allow setting all initial headers at once.
     *
     * @param array $originalHeaders Headers to filter.
     * @return array Filtered headers and names.
     */
    private function filterHeaders(
        $originalHeaders
    )
    {
    }

    /**
     * Test if a value is a string
     *
     * Used with array_reduce.
     *
     * @param bool $carry
     * @param mixed $item
     * @return bool
     */
    private static function filterStringValue(
        $carry,
        $item
    )
    {
    }

    /**
     * Assert that the provided header values are valid.
     *
     * @see http://tools.ietf.org/html/rfc7230#section-3.2
     * @param string[] $values
     * @throws InvalidArgumentException
     */
    private static function assertValidHeaderValue(
        $values
    )
    {
    }

    /**
     * Validate the HTTP protocol version
     *
     * @param string $version
     * @throws InvalidArgumentException on invalid HTTP protocol version
     */
    private function validateProtocolVersion(
        $version
    )
    {
    }

    /**
     * Inject the provided Content-Type, if none is already present.
     *
     * @param string $contentType
     * @param array $headers
     * @return array Headers with injected Content-Type
     */
    private function injectContentType(
        $contentType,
        $headers
    )
    {
    }
}

namespace WHMCS;
class ClientArea
{

    protected $renderedOutput = "";

    private $pageTitle = "";

    private $displayTitle = "";

    private $tagLine = "";

    private $breadcrumb = "";

    private $breadCrumbHtml = "";

    private $templateFile = "";

    private $templateVariables = "";

    private $wrappedWithHeaderFooter = "";

    private $inorderform = "";

    private $insupportmodule = "";

    protected $skipMainBodyContainer = "";

    protected $baseUrl = "";

    protected $outputHooks = "";

    protected $client = "";

    private $smarty = "";

    protected $getBodyFromPrivateStream = "";
    /**
     * List of all registered headers, as key => array of values.
     *
     * @var array
     */
    protected $headers = "";
    /**
     * Map of normalized header name to original name used to register header.
     *
     * @var array
     */
    protected $headerNames = "";

    public function __construct(
        $data,
        $status,
        $headers
    )
    {
    }

    public function isInOrderForm()
    {
    }

    public function resetRenderedOutput()
    {
    }

    protected function initializeView()
    {
    }

    public function setPageTitle(
        $title
    )
    {
    }

    public function getPageTitle()
    {
    }

    public function addToBreadCrumb(
        $link,
        $text
    )
    {
    }

    public function resetBreadCrumb()
    {
    }

    public function getUserID()
    {
    }

    public function getClient()
    {
    }

    public function isLoggedIn()
    {
    }

    public function requireLogin()
    {
    }

    public function setTemplate(
        $template
    )
    {
    }

    public function getTemplateFile()
    {
    }

    public function assign(
        $key,
        $value,
        $allowOverride
    )
    {
    }

    public function setTemplateVariables(
        $data
    )
    {
    }

    public function getTemplateVariables()
    {
    }

    public static function getRawStatus(
        $val
    )
    {
    }

    protected function startSmartyIfNotStarted()
    {
    }

    protected function startSmarty()
    {
    }

    protected function initEmptyTemplateVars()
    {
    }

    public function setDisplayTitle(
        $displayTitle
    )
    {
    }

    public function getDisplayTitle()
    {
    }

    public function setTagLine(
        $tagline
    )
    {
    }

    public function getCurrentPageName()
    {
    }

    protected function registerDefaultTPLVars()
    {
    }

    protected function getCurrencyOptions()
    {
    }

    protected function getLanguageSwitcherHTML()
    {
    }

    public function initPage()
    {
    }

    public function getSingleTPLOutput(
        $templatepath,
        $templateVariables
    )
    {
    }

    protected function runClientAreaOutputHook(
        $hookName
    )
    {
    }

    public static function getConditionalLinks()
    {
    }

    protected function buildBreadCrumbHtml()
    {
    }

    public function getBreadCrumbHtml()
    {
    }

    public function setBreadCrumbHtml(
        $breadCrumbHtml
    )
    {
    }

    public static function getCurrentPageLinkBack()
    {
    }

    public static function isAdminMasqueradingAsClient()
    {
    }

    public static function calculatePwStrengthThresholds()
    {
    }

    public function outputWithoutExit()
    {
    }

    public function output()
    {
    }

    public function getOutputContent()
    {
    }

    public function getLicenseBannerMessage()
    {
    }

    public function getLicenseBannerHtml()
    {
    }

    public function disableHeaderFooterOutput()
    {
    }

    public function isWrappedWithHeaderFooter()
    {
    }

    public function addOutputHookFunction(
        $name
    )
    {
    }

    protected function runOutputHooks()
    {
    }

    public function skipMainBodyContainer()
    {
    }

    public function getBody()
    {
    }

    /**
     * Create the message body.
     *
     * @param string|StreamInterface $html
     * @return StreamInterface
     * @throws InvalidArgumentException if $html is neither a string or stream.
     */
    private function createBody(
        $html
    )
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getStatusCode()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getReasonPhrase()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function withStatus(
        $code,
        $reasonPhrase
    )
    {
    }

    /**
     * Validate a status code.
     *
     * @param int|string $code
     * @throws InvalidArgumentException on an invalid status code.
     */
    private function setStatusCode(
        $code
    )
    {
    }

    /**
     * Ensure header names and values are valid.
     *
     * @param array $headers
     * @throws InvalidArgumentException
     */
    private function assertHeaders(
        $headers
    )
    {
    }

    /**
     * Retrieves the HTTP protocol version as a string.
     *
     * The string MUST contain only the HTTP version number (e.g., "1.1", "1.0").
     *
     * @return string HTTP protocol version.
     */
    public function getProtocolVersion()
    {
    }

    /**
     * Return an instance with the specified HTTP protocol version.
     *
     * The version string MUST contain only the HTTP version number (e.g.,
     * "1.1", "1.0").
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * new protocol version.
     *
     * @param string $version HTTP protocol version
     * @return static
     */
    public function withProtocolVersion(
        $version
    )
    {
    }

    /**
     * Retrieves all message headers.
     *
     * The keys represent the header name as it will be sent over the wire, and
     * each value is an array of strings associated with the header.
     *
     *     // Represent the headers as a string
     *     foreach ($message->getHeaders() as $name => $values) {
     *         echo $name . ": " . implode(", ", $values);
     *     }
     *
     *     // Emit headers iteratively:
     *     foreach ($message->getHeaders() as $name => $values) {
     *         foreach ($values as $value) {
     *             header(sprintf('%s: %s', $name, $value), false);
     *         }
     *     }
     *
     * @return array Returns an associative array of the message's headers. Each
     *     key MUST be a header name, and each value MUST be an array of strings.
     */
    public function getHeaders()
    {
    }

    /**
     * Checks if a header exists by the given case-insensitive name.
     *
     * @param string $header Case-insensitive header name.
     * @return bool Returns true if any header names match the given header
     *     name using a case-insensitive string comparison. Returns false if
     *     no matching header name is found in the message.
     */
    public function hasHeader(
        $header
    )
    {
    }

    /**
     * Retrieves a message header value by the given case-insensitive name.
     *
     * This method returns an array of all the header values of the given
     * case-insensitive header name.
     *
     * If the header does not appear in the message, this method MUST return an
     * empty array.
     *
     * @param string $header Case-insensitive header field name.
     * @return string[] An array of string values as provided for the given
     *    header. If the header does not appear in the message, this method MUST
     *    return an empty array.
     */
    public function getHeader(
        $header
    )
    {
    }

    /**
     * Retrieves a comma-separated string of the values for a single header.
     *
     * This method returns all of the header values of the given
     * case-insensitive header name as a string concatenated together using
     * a comma.
     *
     * NOTE: Not all header values may be appropriately represented using
     * comma concatenation. For such headers, use getHeader() instead
     * and supply your own delimiter when concatenating.
     *
     * If the header does not appear in the message, this method MUST return
     * an empty string.
     *
     * @param string $name Case-insensitive header field name.
     * @return string A string of values as provided for the given header
     *    concatenated together using a comma. If the header does not appear in
     *    the message, this method MUST return an empty string.
     */
    public function getHeaderLine(
        $name
    )
    {
    }

    /**
     * Return an instance with the provided header, replacing any existing
     * values of any headers with the same case-insensitive name.
     *
     * While header names are case-insensitive, the casing of the header will
     * be preserved by this function, and returned from getHeaders().
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * new and/or updated header and value.
     *
     * @param string $header Case-insensitive header field name.
     * @param string|string[] $value Header value(s).
     * @return static
     * @throws \InvalidArgumentException for invalid header names or values.
     */
    public function withHeader(
        $header,
        $value
    )
    {
    }

    /**
     * Return an instance with the specified header appended with the
     * given value.
     *
     * Existing values for the specified header will be maintained. The new
     * value(s) will be appended to the existing list. If the header did not
     * exist previously, it will be added.
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * new header and/or value.
     *
     * @param string $header Case-insensitive header field name to add.
     * @param string|string[] $value Header value(s).
     * @return static
     * @throws \InvalidArgumentException for invalid header names or values.
     */
    public function withAddedHeader(
        $header,
        $value
    )
    {
    }

    /**
     * Return an instance without the specified header.
     *
     * Header resolution MUST be done without case-sensitivity.
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that removes
     * the named header.
     *
     * @param string $header Case-insensitive header field name to remove.
     * @return static
     */
    public function withoutHeader(
        $header
    )
    {
    }

    /**
     * Return an instance with the specified message body.
     *
     * The body MUST be a StreamInterface object.
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return a new instance that has the
     * new body stream.
     *
     * @param StreamInterface $body Body.
     * @return static
     * @throws \InvalidArgumentException When the body is not valid.
     */
    public function withBody(
        $body
    )
    {
    }

    private function getStream(
        $stream,
        $modeIfNotInstance
    )
    {
    }

    /**
     * Test that an array contains only strings
     *
     * @param array $array
     * @return bool
     */
    private function arrayContainsOnlyStrings(
        $array
    )
    {
    }

    /**
     * Filter a set of headers to ensure they are in the correct internal format.
     *
     * Used by message constructors to allow setting all initial headers at once.
     *
     * @param array $originalHeaders Headers to filter.
     * @return array Filtered headers and names.
     */
    private function filterHeaders(
        $originalHeaders
    )
    {
    }

    /**
     * Test if a value is a string
     *
     * Used with array_reduce.
     *
     * @param bool $carry
     * @param mixed $item
     * @return bool
     */
    private static function filterStringValue(
        $carry,
        $item
    )
    {
    }

    /**
     * Assert that the provided header values are valid.
     *
     * @see http://tools.ietf.org/html/rfc7230#section-3.2
     * @param string[] $values
     * @throws InvalidArgumentException
     */
    private static function assertValidHeaderValue(
        $values
    )
    {
    }

    /**
     * Validate the HTTP protocol version
     *
     * @param string $version
     * @throws InvalidArgumentException on invalid HTTP protocol version
     */
    private function validateProtocolVersion(
        $version
    )
    {
    }

    /**
     * Inject the provided Content-Type, if none is already present.
     *
     * @param string $contentType
     * @param array $headers
     * @return array Headers with injected Content-Type
     */
    private function injectContentType(
        $contentType,
        $headers
    )
    {
    }
}

namespace WHMCS;
class Chart
{

    public $chartcount = "";

    public function __construct()
    {
    }

    public function drawChart(
        $type,
        $data,
        $args,
        $height,
        $width
    )
    {
    }
}

namespace WHMCS\Application\Support\ServiceProvider;
abstract class AbstractServiceProvider
{

    protected $app = "";

    public function __construct(
        $app
    )
    {
    }

    abstract public function register();
}

namespace WHMCS\Log;
class LogServiceProvider
{

    protected $app = "";

    public function register()
    {
    }

    public function factoryDefaultChannelLogger()
    {
    }

    protected function importLogHandlers(
        $baseDirectory
    )
    {
    }

    public function __construct(
        $app
    )
    {
    }
}

namespace WHMCS\Route;
class RouteServiceProvider
{

    protected $app = "";

    public function register()
    {
    }

    protected function standardRoutes()
    {
    }

    public function __construct(
        $app
    )
    {
    }

    public function getRoutes()
    {
    }

    public function addRoute(
        $routeCollector,
        $route,
        $group
    )
    {
    }

    public function getUriMap()
    {
    }

    public function getAuthenticationMap()
    {
    }

    public function getAuthorizationMap()
    {
    }

    public function getResponseTypeMap()
    {
    }

    public function applyGroupLevelAttributes(
        $routes
    )
    {
    }

    public function addRouteGroups(
        $routeCollector,
        $routeGroup
    )
    {
    }

    public function addDeferredRouteGroup(
        $routeCollector,
        $provider,
        $group
    )
    {
    }

    public function registerRoutes(
        $routeCollector
    )
    {
    }
}

namespace WHMCS\Application;
class ApplicationServiceProvider
{

    protected $app = "";

    public function register()
    {
    }

    public static function checkVersion()
    {
    }

    public static function isVersionBumpValid(
        $fileVersion,
        $databaseVersion
    )
    {
    }

    public function __construct(
        $app
    )
    {
    }
}

namespace WHMCS\Api;
class ApiServiceProvider
{

    protected $app = "";

    public function register()
    {
    }

    public function getRoutes()
    {
    }

    public function registerRoutes(
        $routeCollector
    )
    {
    }

    public function __construct(
        $app
    )
    {
    }

    public function addRoute(
        $routeCollector,
        $route,
        $group
    )
    {
    }

    public function getUriMap()
    {
    }

    public function getAuthenticationMap()
    {
    }

    public function getAuthorizationMap()
    {
    }

    public function getResponseTypeMap()
    {
    }

    public function applyGroupLevelAttributes(
        $routes
    )
    {
    }

    public function addRouteGroups(
        $routeCollector,
        $routeGroup
    )
    {
    }

    public function addDeferredRouteGroup(
        $routeCollector,
        $provider,
        $group
    )
    {
    }
}

namespace WHMCS\Api\ApplicationSupport\Route\Middleware;
class HandleProcessor
{

    public function getApiFilePath(
        $request
    )
    {
    }

    public function _process(
        $request,
        $delegate
    )
    {
    }

    public function getV1Api()
    {
    }

    public function processV1Request(
        $request
    )
    {
    }

    public function process(
        $request,
        $delegate
    )
    {
    }
}

namespace WHMCS\Route;
class UriPath
{

    private $baseUri = "";

    protected $deferredRoutes = "";

    protected $routes = "";

    public function __construct(
        $baseUri
    )
    {
    }

    public function mapRoute(
        $route
    )
    {
    }

    public function getMappedAttributeName()
    {
    }

    public function getSafeNonRoutablePath()
    {
    }

    public function getRawPath(
        $routeName,
        $routeVars
    )
    {
    }

    public function getPath(
        $routeName,
        $routeVars
    )
    {
    }

    public function getRouteCollector()
    {
    }

    protected function getDeferredRoutePath(
        $routeName
    )
    {
    }

    protected function buildRoutePath(
        $routeName,
        $routeVars
    )
    {
    }

    public static function getAllKnownModes()
    {
    }

    public function setMode(
        $mode
    )
    {
    }

    public function getMode()
    {
    }

    protected function getModRewriteFriendlyString(
        $string
    )
    {
    }

    public function getMappedRoute(
        $key
    )
    {
    }
}

namespace WHMCS\Utility\Environment;
class WebHelper
{

    public static function getBaseUrl(
        $root,
        $scriptName
    )
    {
    }

    public static function getAdminBaseUrl(
        $root,
        $scriptName
    )
    {
    }
}

namespace WHMCS\Config;
class Application
{

    protected $loadedFilename = "";

    protected $rootDir = "";

    protected $requireConfigurationValues = "";

    public function __construct(
        $data
    )
    {
    }

    public function isConfigFileLoaded()
    {
    }

    public function getLoadedFilename()
    {
    }

    protected function setLoadedFilename(
        $filename
    )
    {
    }

    public function validConfigVariables()
    {
    }

    public function loadConfigFile(
        $file
    )
    {
    }

    public function configFileExists(
        $file
    )
    {
    }

    protected function getAbsolutePath(
        $file
    )
    {
    }

    public function getDatabaseName()
    {
    }

    public function getDatabaseUserName()
    {
    }

    public function getDatabasePassword()
    {
    }

    public function getDatabaseHost()
    {
    }

    public function getDatabaseCharset()
    {
    }

    public function getDatabasePort()
    {
    }

    public function setDatabaseCharset(
        $charset
    )
    {
    }

    public function setDatabaseName(
        $name
    )
    {
    }

    public function setDatabaseUsername(
        $username
    )
    {
    }

    public function setDatabaseHost(
        $host
    )
    {
    }

    protected function parseDatabasePortFromHost(
        $host
    )
    {
    }

    public function setDatabasePassword(
        $password
    )
    {
    }

    public function setDatabasePort(
        $port
    )
    {
    }

    public function getDefaultApplicationConfigFilename()
    {
    }

    public function hasCustomWritableDirectories()
    {
    }

    public function getRootDir()
    {
    }

    public function getAbsoluteAttachmentsPath()
    {
    }

    public function getSqlMode()
    {
    }

    public function invalidConfigurationValues()
    {
    }

    public function setData(
        $data
    )
    {
    }

    public function getData()
    {
    }

    public function setDefaultReturnValue(
        $value
    )
    {
    }

    public function OffsetGet(
        $property
    )
    {
    }

    public function offsetExists(
        $index
    )
    {
    }

    public function offsetSet(
        $index,
        $newval
    )
    {
    }

    public function offsetUnset(
        $index
    )
    {
    }

    public function append(
        $value
    )
    {
    }

    public function getArrayCopy()
    {
    }

    public function count()
    {
    }

    public function getFlags()
    {
    }

    public function setFlags(
        $flags
    )
    {
    }

    public function asort()
    {
    }

    public function ksort()
    {
    }

    public function uasort(
        $cmp_function
    )
    {
    }

    public function uksort(
        $cmp_function
    )
    {
    }

    public function natsort()
    {
    }

    public function natcasesort()
    {
    }

    public function unserialize(
        $serialized
    )
    {
    }

    public function serialize()
    {
    }

    public function getIterator()
    {
    }

    public function exchangeArray(
        $array
    )
    {
    }

    public function setIteratorClass(
        $iteratorClass
    )
    {
    }

    public function getIteratorClass()
    {
    }
}

namespace WHMCS\Route\Middleware;
abstract class AbstractProxyMiddleware
{

    protected $routes = "";

    abstract public function factoryProxyDriver(
        $handle,
        $request
    );

    public function _process(
        $request,
        $delegate
    )
    {
    }

    public function process(
        $request,
        $delegate
    )
    {
    }

    abstract public function getMappedAttributeName();

    public function mapRoute(
        $route
    )
    {
    }

    public function getMappedRoute(
        $key
    )
    {
    }
}

namespace WHMCS\Route\Middleware;
class AuthenticationProxy
{

    protected $routes = "";

    public function getMappedAttributeName()
    {
    }

    public function factoryProxyDriver(
        $handle,
        $request
    )
    {
    }

    public function _process(
        $request,
        $delegate
    )
    {
    }

    public function process(
        $request,
        $delegate
    )
    {
    }

    public function mapRoute(
        $route
    )
    {
    }

    public function getMappedRoute(
        $key
    )
    {
    }
}

namespace WHMCS\Route\Middleware;
class AuthorizationProxy
{

    protected $routes = "";

    public function getMappedAttributeName()
    {
    }

    public function factoryProxyDriver(
        $handle,
        $request
    )
    {
    }

    public function _process(
        $request,
        $delegate
    )
    {
    }

    public function process(
        $request,
        $delegate
    )
    {
    }

    public function mapRoute(
        $route
    )
    {
    }

    public function getMappedRoute(
        $key
    )
    {
    }
}

namespace WHMCS\Smarty;
class SmartyServiceProvider
{

    protected $app = "";

    public function register()
    {
    }

    protected function getUserPolicySettings(
        $policyName
    )
    {
    }

    protected function getPolicyClassName(
        $policyName
    )
    {
    }

    public function __construct(
        $app
    )
    {
    }
}

namespace WHMCS\View;
class ViewServiceProvider
{

    protected $app = "";

    public function register()
    {
    }

    public function __construct(
        $app
    )
    {
    }
}

namespace WHMCS\ClientArea;
class ClientAreaServiceProvider
{

    protected $app = "";

    protected function getRoutes()
    {
    }

    public function registerRoutes(
        $routeCollector
    )
    {
    }

    public function register()
    {
    }

    public function __construct(
        $app
    )
    {
    }

    public function addRoute(
        $routeCollector,
        $route,
        $group
    )
    {
    }

    public function getUriMap()
    {
    }

    public function getAuthenticationMap()
    {
    }

    public function getAuthorizationMap()
    {
    }

    public function getResponseTypeMap()
    {
    }

    public function applyGroupLevelAttributes(
        $routes
    )
    {
    }

    public function addRouteGroups(
        $routeCollector,
        $routeGroup
    )
    {
    }

    public function addDeferredRouteGroup(
        $routeCollector,
        $provider,
        $group
    )
    {
    }
}

namespace WHMCS\ClientArea\Account;
class AccountRouteProvider
{

    public function getRoutes()
    {
    }

    public function getDeferredRoutePathNameAttribute()
    {
    }

    public function registerRoutes(
        $routeCollector
    )
    {
    }

    public function addRoute(
        $routeCollector,
        $route,
        $group
    )
    {
    }

    public function getUriMap()
    {
    }

    public function getAuthenticationMap()
    {
    }

    public function getAuthorizationMap()
    {
    }

    public function getResponseTypeMap()
    {
    }

    public function applyGroupLevelAttributes(
        $routes
    )
    {
    }

    public function addRouteGroups(
        $routeCollector,
        $routeGroup
    )
    {
    }

    public function addDeferredRouteGroup(
        $routeCollector,
        $provider,
        $group
    )
    {
    }
}

namespace WHMCS\Payment;
class PaymentRouteProvider
{

    protected $app = "";

    protected function getRoutes()
    {
    }

    public function registerRoutes(
        $routeCollector
    )
    {
    }

    public function register()
    {
    }

    public function __construct(
        $app
    )
    {
    }

    public function addRoute(
        $routeCollector,
        $route,
        $group
    )
    {
    }

    public function getUriMap()
    {
    }

    public function getAuthenticationMap()
    {
    }

    public function getAuthorizationMap()
    {
    }

    public function getResponseTypeMap()
    {
    }

    public function applyGroupLevelAttributes(
        $routes
    )
    {
    }

    public function addRouteGroups(
        $routeCollector,
        $routeGroup
    )
    {
    }

    public function addDeferredRouteGroup(
        $routeCollector,
        $provider,
        $group
    )
    {
    }
}

namespace WHMCS\Module\Gateway\Stripe;
class StripeRouteProvider
{

    protected $app = "";

    protected function getRoutes()
    {
    }

    public function registerRoutes(
        $routeCollector
    )
    {
    }

    public function register()
    {
    }

    public function __construct(
        $app
    )
    {
    }

    public function addRoute(
        $routeCollector,
        $route,
        $group
    )
    {
    }

    public function getUriMap()
    {
    }

    public function getAuthenticationMap()
    {
    }

    public function getAuthorizationMap()
    {
    }

    public function getResponseTypeMap()
    {
    }

    public function applyGroupLevelAttributes(
        $routes
    )
    {
    }

    public function addRouteGroups(
        $routeCollector,
        $routeGroup
    )
    {
    }

    public function addDeferredRouteGroup(
        $routeCollector,
        $provider,
        $group
    )
    {
    }
}

namespace WHMCS\Knowledgebase;
class KnowledgebaseServiceProvider
{

    protected function getRoutes()
    {
    }

    public function registerRoutes(
        $routeCollector
    )
    {
    }

    public function register()
    {
    }

    public function addRoute(
        $routeCollector,
        $route,
        $group
    )
    {
    }

    public function getUriMap()
    {
    }

    public function getAuthenticationMap()
    {
    }

    public function getAuthorizationMap()
    {
    }

    public function getResponseTypeMap()
    {
    }

    public function applyGroupLevelAttributes(
        $routes
    )
    {
    }

    public function addRouteGroups(
        $routeCollector,
        $routeGroup
    )
    {
    }

    public function addDeferredRouteGroup(
        $routeCollector,
        $provider,
        $group
    )
    {
    }
}

namespace WHMCS\MarketConnect;
class MarketConnectServiceProvider
{

    protected $app = "";

    public function register()
    {
    }

    protected function getRoutes()
    {
    }

    public function registerRoutes(
        $routeCollector
    )
    {
    }

    public function __construct(
        $app
    )
    {
    }

    public function addRoute(
        $routeCollector,
        $route,
        $group
    )
    {
    }

    public function getUriMap()
    {
    }

    public function getAuthenticationMap()
    {
    }

    public function getAuthorizationMap()
    {
    }

    public function getResponseTypeMap()
    {
    }

    public function applyGroupLevelAttributes(
        $routes
    )
    {
    }

    public function addRouteGroups(
        $routeCollector,
        $routeGroup
    )
    {
    }

    public function addDeferredRouteGroup(
        $routeCollector,
        $provider,
        $group
    )
    {
    }
}

namespace WHMCS\Cart;
class CartServiceProvider
{

    protected $app = "";

    protected function getRoutes()
    {
    }

    public function registerRoutes(
        $routeCollector
    )
    {
    }

    public function register()
    {
    }

    public function __construct(
        $app
    )
    {
    }

    public function addRoute(
        $routeCollector,
        $route,
        $group
    )
    {
    }

    public function getUriMap()
    {
    }

    public function getAuthenticationMap()
    {
    }

    public function getAuthorizationMap()
    {
    }

    public function getResponseTypeMap()
    {
    }

    public function applyGroupLevelAttributes(
        $routes
    )
    {
    }

    public function addRouteGroups(
        $routeCollector,
        $routeGroup
    )
    {
    }

    public function addDeferredRouteGroup(
        $routeCollector,
        $provider,
        $group
    )
    {
    }
}

namespace WHMCS\Authentication\Remote;
class ServiceProvider
{

    protected $app = "";

    public function register()
    {
    }

    public function registerRoutes(
        $routeCollector
    )
    {
    }

    private function getClientAreaManagementRoutes()
    {
    }

    private function getProviderRoutes()
    {
    }

    public function __construct(
        $app
    )
    {
    }

    public function getRoutes()
    {
    }

    public function addRoute(
        $routeCollector,
        $route,
        $group
    )
    {
    }

    public function getUriMap()
    {
    }

    public function getAuthenticationMap()
    {
    }

    public function getAuthorizationMap()
    {
    }

    public function getResponseTypeMap()
    {
    }

    public function applyGroupLevelAttributes(
        $routes
    )
    {
    }

    public function addRouteGroups(
        $routeCollector,
        $routeGroup
    )
    {
    }

    public function addDeferredRouteGroup(
        $routeCollector,
        $provider,
        $group
    )
    {
    }
}

namespace WHMCS\File;
class StorageServiceProvider
{

    protected $app = "";

    public function register()
    {
    }

    public function __construct(
        $app
    )
    {
    }
}

namespace WHMCS\Payment;
class PaymentServiceProvider
{

    protected $app = "";

    public function register()
    {
    }

    public function __construct(
        $app
    )
    {
    }
}

namespace WHMCS\Exception\Handler;
class PrettyHtmlHandler
{

    public function handle()
    {
    }

    public function getHtmlErrorPage()
    {
    }

    protected function isActuallyError()
    {
    }

    protected function isActuallyFatalError()
    {
    }

    /**
     * @param RunInterface $run
     */
    public function setRun(
        $run
    )
    {
    }

    /**
     * @return RunInterface
     */
    protected function getRun()
    {
    }

    /**
     * @param Inspector $inspector
     */
    public function setInspector(
        $inspector
    )
    {
    }

    /**
     * @return Inspector
     */
    protected function getInspector()
    {
    }

    /**
     * @param \Throwable $exception
     */
    public function setException(
        $exception
    )
    {
    }

    /**
     * @return \Throwable
     */
    protected function getException()
    {
    }

    public function log(
        $exception
    )
    {
    }
}

namespace WHMCS\Exception\Handler;
class TerminusHandler
{

    public function handle()
    {
    }

    /**
     * @param RunInterface $run
     */
    public function setRun(
        $run
    )
    {
    }

    /**
     * @return RunInterface
     */
    protected function getRun()
    {
    }

    /**
     * @param Inspector $inspector
     */
    public function setInspector(
        $inspector
    )
    {
    }

    /**
     * @return Inspector
     */
    protected function getInspector()
    {
    }

    /**
     * @param \Throwable $exception
     */
    public function setException(
        $exception
    )
    {
    }

    /**
     * @return \Throwable
     */
    protected function getException()
    {
    }
}

namespace WHMCS;
class Database
{

    protected $hostname = "";

    protected $username = "";

    protected $password = "";

    protected $databaseName = "";

    protected $characterSet = "";

    protected $connection = "";

    protected $port = "";

    protected $pdo = "";

    protected $sqlMode = "";

    public function __construct(
        $config
    )
    {
    }

    public function getPdo()
    {
    }

    public function setPdo(
        $pdo
    )
    {
    }

    protected function setHostname(
        $hostname
    )
    {
    }

    protected function getHostname()
    {
    }

    protected function setUsername(
        $username
    )
    {
    }

    protected function getUsername()
    {
    }

    protected function setPassword(
        $password
    )
    {
    }

    protected function getPassword()
    {
    }

    protected function getPort()
    {
    }

    protected function setPort(
        $port
    )
    {
    }

    protected function setDatabaseName(
        $databaseName
    )
    {
    }

    public function getDatabaseName()
    {
    }

    protected function setCharacterSet(
        $characterSet
    )
    {
    }

    public function getCharacterSet()
    {
    }

    protected function setConnection(
        $connection
    )
    {
    }

    public function getConnection()
    {
    }

    public function getSqlMode()
    {
    }

    public function setSqlMode(
        $value
    )
    {
    }

    public function retrieveDatabaseConnection()
    {
    }

    protected function connect()
    {
    }

    protected function getCollationFromCharacterSet(
        $characterSet
    )
    {
    }

    protected function capsuleFactory()
    {
    }

    protected function applySqlMode(
        $sqlMode
    )
    {
    }

    protected function applyLegacyConnectionSqlMode(
        $sqlMode
    )
    {
    }

    public function listTables()
    {
    }

    public function optimizeTables(
        $tables
    )
    {
    }

    public function showVariable(
        $variableName
    )
    {
    }

    public function showLegacyConnectionVariable(
        $variableName
    )
    {
    }

    public function isSqlStrictMode()
    {
    }

    public function getSqlVersion()
    {
    }

    public function getSqlVersionComment()
    {
    }
}

namespace WHMCS\Database;
class Capsule
{
    /**
     * The database manager instance.
     *
     * @var \Illuminate\Database\DatabaseManager
     */
    protected $manager = "";
    /**
     * The current globally used instance.
     *
     * @var object
     */
    protected static $instance = "";
    /**
     * The container instance.
     *
     * @var \Illuminate\Contracts\Container\Container
     */
    protected $container = "";

    public static function getInstance()
    {
    }

    public static function applyCollationIfCompatible(
        $columnName
    )
    {
    }

    /**
     * Create a new database capsule manager.
     *
     * @param \Illuminate\Container\Container|null $container
     * @return void
     */
    public function __construct(
        $container
    )
    {
    }

    /**
     * Setup the default database configuration options.
     *
     * @return void
     */
    protected function setupDefaultConfiguration()
    {
    }

    /**
     * Build the database manager instance.
     *
     * @return void
     */
    protected function setupManager()
    {
    }

    /**
     * Get a connection instance from the global manager.
     *
     * @param string $connection
     * @return \Illuminate\Database\Connection
     */
    public static function connection(
        $connection
    )
    {
    }

    /**
     * Get a fluent query builder instance.
     *
     * @param string $table
     * @param string $connection
     * @return \Illuminate\Database\Query\Builder
     */
    public static function table(
        $table,
        $connection
    )
    {
    }

    /**
     * Get a schema builder instance.
     *
     * @param string $connection
     * @return \Illuminate\Database\Schema\Builder
     */
    public static function schema(
        $connection
    )
    {
    }

    /**
     * Get a registered connection instance.
     *
     * @param string $name
     * @return \Illuminate\Database\Connection
     */
    public function getConnection(
        $name
    )
    {
    }

    /**
     * Register a connection with the manager.
     *
     * @param array $config
     * @param string $name
     * @return void
     */
    public function addConnection(
        $config,
        $name = "default"
    )
    {
    }

    /**
     * Bootstrap Eloquent so it is ready for usage.
     *
     * @return void
     */
    public function bootEloquent()
    {
    }

    /**
     * Set the fetch mode for the database connections.
     *
     * @param int $fetchMode
     * @return $this
     */
    public function setFetchMode(
        $fetchMode
    )
    {
    }

    /**
     * Get the database manager instance.
     *
     * @return \Illuminate\Database\DatabaseManager
     */
    public function getDatabaseManager()
    {
    }

    /**
     * Get the current event dispatcher instance.
     *
     * @return \Illuminate\Contracts\Events\Dispatcher|null
     */
    public function getEventDispatcher()
    {
    }

    /**
     * Set the event dispatcher instance to be used by connections.
     *
     * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
     * @return void
     */
    public function setEventDispatcher(
        $dispatcher
    )
    {
    }

    /**
     * Dynamically pass methods to the default connection.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public static function __callStatic(
        $method,
        $parameters
    )
    {
    }

    /**
     * Setup the IoC container instance.
     *
     * @param \Illuminate\Contracts\Container\Container $container
     * @return void
     */
    protected function setupContainer(
        $container
    )
    {
    }

    /**
     * Make this capsule instance available globally.
     *
     * @return void
     */
    public function setAsGlobal()
    {
    }

    /**
     * Get the IoC container instance.
     *
     * @return \Illuminate\Contracts\Container\Container
     */
    public function getContainer()
    {
    }

    /**
     * Set the IoC container instance.
     *
     * @param \Illuminate\Contracts\Container\Container $container
     * @return void
     */
    public function setContainer(
        $container
    )
    {
    }
}

namespace WHMCS;
class Init
{

    protected $input = "";

    protected $last_input = "";

    protected $clean_variables = "";

    protected $license = "";

    protected $db_host = "";

    protected $db_username = "";

    protected $db_password = "";

    protected $db_name = "";

    protected $db_sqlcharset = "";

    protected $cc_hash = "";

    protected $templates_compiledir = "";

    protected $customadminpath = "";

    public $remote_ip = "";

    protected $protected_variables = "";

    public function init()
    {
    }

    public function load_function(
        $name
    )
    {
    }

    public function sanitize_input_vars(
        $arr
    )
    {
    }

    public function replace_input(
        $array
    )
    {
    }

    public function reset_input()
    {
    }

    public function isInRequest(
        $key,
        $key2
    )
    {
    }

    public function getFromRequest(
        $key,
        $key2
    )
    {
    }

    public function get_req_var(
        $k,
        $k2
    )
    {
    }

    public function get_req_var_if(
        $e,
        $key,
        $fallbackarray,
        $fallbackarraykey
    )
    {
    }

    protected function load_input()
    {
    }

    public function clean_param_array(
        $params
    )
    {
    }

    protected function clean_input()
    {
    }

    public function sanitize(
        $type,
        $var
    )
    {
    }

    public function get_license_key()
    {
    }

    public function set_config(
        $key,
        $value
    )
    {
    }

    public function get_config(
        $key
    )
    {
    }

    public function get_template_compiledir_name()
    {
    }

    public function check_template_cache_writeable()
    {
    }

    public function get_admin_folder_name()
    {
    }

    public function get_filename()
    {
    }

    public function get_hash()
    {
    }

    protected function validate_templates()
    {
    }

    public function get_lang(
        $var
    )
    {
    }

    public function in_ssl()
    {
    }

    public function getCurrencyID()
    {
    }

    public function formatPostedPhoneNumber(
        $field
    )
    {
    }
}

namespace WHMCS;
class Application
{

    protected $clientTemplate = "";

    protected $dangerousVariables = "";

    protected $phpSelf = "";

    protected $input = "";

    protected $last_input = "";

    protected $clean_variables = "";

    protected $license = "";

    protected $db_host = "";

    protected $db_username = "";

    protected $db_password = "";

    protected $db_name = "";

    protected $db_sqlcharset = "";

    protected $cc_hash = "";

    protected $templates_compiledir = "";

    protected $customadminpath = "";

    public $remote_ip = "";

    protected $protected_variables = "";

    public function __construct(
        $config,
        $database
    )
    {
    }

    public static function getInstance()
    {
    }

    protected function loadDatabase(
        $database
    )
    {
    }

    public function importConfig(
        $config
    )
    {
    }

    public function getLicense()
    {
    }

    public function getLicenseClientKey()
    {
    }

    public function setPhpSelf(
        $script
    )
    {
    }

    public function getPhpSelf()
    {
    }

    public function setRemoteIp(
        $ip
    )
    {
    }

    public function getRemoteIp()
    {
    }

    public function getDatabaseObj()
    {
    }

    public function getApplicationConfig()
    {
    }

    public function getAttachmentsDir()
    {
    }

    public function getDownloadsDir()
    {
    }

    public function getTemplatesCacheDir()
    {
    }

    public function getCronDirectory()
    {
    }

    public function redirect(
        $path,
        $vars,
        $prefix
    )
    {
    }

    public function getRedirectUrl(
        $path,
        $vars,
        $prefix
    )
    {
    }

    public function redirectSystemURL(
        $path,
        $vars
    )
    {
    }

    public function redirectToRoutePath(
        $route,
        $routeVariables,
        $queryParameters
    )
    {
    }

    public function initInputs()
    {
    }

    protected function registerGlobalVariable(
        $globalVariableName,
        $globalVariableValue
    )
    {
    }

    protected function register_globals()
    {
    }

    protected function loadAdminDefinedConfigurations()
    {
    }

    public function isVisitorIPBanned()
    {
    }

    protected function shouldRedirectForIPBan()
    {
    }

    public function getWHMCSInstanceID()
    {
    }

    protected function createWHMCSInstanceID()
    {
    }

    public function getCurrentFilename(
        $stripExtension
    )
    {
    }

    public function getSystemURL(
        $withTrailing
    )
    {
    }

    public function getSystemSSLURL()
    {
    }

    public function getSystemSSLURLOrFail()
    {
    }

    public function isSSLAvailable()
    {
    }

    public function isApiRequest()
    {
    }

    public function isClientAreaRequest()
    {
    }

    public function isAdminAreaRequest()
    {
    }

    public function isExecutingViaCron()
    {
    }

    public function getClientAreaTemplate()
    {
    }

    public function getVersion()
    {
    }

    public function getDBVersion()
    {
    }

    public function doFileAndDBVersionsNotMatch()
    {
    }

    public function getReleaseDate()
    {
    }

    public function setMaintenanceMode()
    {
    }

    public function unsetMaintenanceMode()
    {
    }

    public function isInMaintenanceMode()
    {
    }

    public function isUpdateAvailable()
    {
    }

    public function isUpdating()
    {
    }

    public function getLogoUrlForEmailTemplate()
    {
    }

    public function init()
    {
    }

    public function load_function(
        $name
    )
    {
    }

    public function sanitize_input_vars(
        $arr
    )
    {
    }

    public function replace_input(
        $array
    )
    {
    }

    public function reset_input()
    {
    }

    public function isInRequest(
        $key,
        $key2
    )
    {
    }

    public function getFromRequest(
        $key,
        $key2
    )
    {
    }

    public function get_req_var(
        $k,
        $k2
    )
    {
    }

    public function get_req_var_if(
        $e,
        $key,
        $fallbackarray,
        $fallbackarraykey
    )
    {
    }

    protected function load_input()
    {
    }

    public function clean_param_array(
        $params
    )
    {
    }

    protected function clean_input()
    {
    }

    public function sanitize(
        $type,
        $var
    )
    {
    }

    public function get_license_key()
    {
    }

    public function set_config(
        $key,
        $value
    )
    {
    }

    public function get_config(
        $key
    )
    {
    }

    public function get_template_compiledir_name()
    {
    }

    public function check_template_cache_writeable()
    {
    }

    public function get_admin_folder_name()
    {
    }

    public function get_filename()
    {
    }

    public function get_hash()
    {
    }

    protected function validate_templates()
    {
    }

    public function get_lang(
        $var
    )
    {
    }

    public function in_ssl()
    {
    }

    public function getCurrencyID()
    {
    }

    public function formatPostedPhoneNumber(
        $field
    )
    {
    }
}

namespace WHMCS\Input;
class Sanitize
{

    public static function makeSafeForOutput(
        $val
    )
    {
    }

    public static function convertToCompatHtml(
        $val
    )
    {
    }

    public static function encode(
        $val
    )
    {
    }

    public static function encodeToCompatHTML(
        $val
    )
    {
    }

    public static function decode(
        $val
    )
    {
    }

    protected function encodeArray(
        $array
    )
    {
    }

    protected function encodeArrayToCompatHTML(
        $array
    )
    {
    }

    protected function decodeArray(
        $array
    )
    {
    }

    protected function encodeString(
        $val
    )
    {
    }

    protected function encodeStringToCompatHTML(
        $val
    )
    {
    }

    public function getCompatBitmask()
    {
    }

    protected function decodeString(
        $val
    )
    {
    }

    public static function maskEmailVerificationId(
        $message
    )
    {
    }

    public static function escapeSingleQuotedString(
        $content
    )
    {
    }

    public static function stripTags(
        $val,
        $allowedTags
    )
    {
    }

    protected function stripTagsFromString(
        $val,
        $allowedTags
    )
    {
    }

    protected function stripTagsFromArray(
        $array,
        $allowedTags
    )
    {
    }
}

namespace WHMCS\Model;
class AbstractModel
{

    public $unique = "";

    public $guardedForUpdate = "";

    protected $columnMap = "";

    protected $booleans = "";

    protected $strings = "";

    protected $ints = "";

    protected $semanticVersions = "";

    protected $commaSeparated = "";

    protected $characterSeparated = "";

    protected static $tableColumnCache = "";

    protected $rules = "";

    protected $errors = "";

    protected $customValidationMessages = "";
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = "";
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "";
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = "";
    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = "";
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = "";
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = "";
    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = "";
    /**
     * The model attribute's original state.
     *
     * @var array
     */
    protected $original = "";
    /**
     * The loaded relationships for the model.
     *
     * @var array
     */
    protected $relations = "";
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = "";
    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = "";
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = "";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = "";
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = "";
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = "";
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = "";
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = "";
    /**
     * The relationships that should be touched on save.
     *
     * @var array
     */
    protected $touches = "";
    /**
     * User exposed observable events.
     *
     * @var array
     */
    protected $observables = "";
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = "";
    /**
     * The class name to be used in polymorphic relations.
     *
     * @var string
     */
    protected $morphClass = "";
    /**
     * Indicates if the model exists.
     *
     * @var bool
     */
    public $exists = "";
    /**
     * Indicates if the model was inserted during the current request lifecycle.
     *
     * @var bool
     */
    public $wasRecentlyCreated = "";
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @var bool
     */
    public static $snakeAttributes;
    /**
     * The connection resolver instance.
     *
     * @var \Illuminate\Database\ConnectionResolverInterface
     */
    protected static $resolver = "";
    /**
     * The event dispatcher instance.
     *
     * @var \Illuminate\Contracts\Events\Dispatcher
     */
    protected static $dispatcher = "";
    /**
     * The array of booted models.
     *
     * @var array
     */
    protected static $booted = "";
    /**
     * The array of global scopes on the model.
     *
     * @var array
     */
    protected static $globalScopes = "";
    /**
     * Indicates if all mass assignment is enabled.
     *
     * @var bool
     */
    protected static $unguarded = "";
    /**
     * The cache of the mutated attributes for each class.
     *
     * @var array
     */
    protected static $mutatorCache = "";
    /**
     * The many to many relationship methods.
     *
     * @var array
     */
    public static $manyMethods;

    public static function boot()
    {
    }

    public function clearColumnCache()
    {
    }

    protected function hasColumn(
        $column
    )
    {
    }

    public function getAttribute(
        $key
    )
    {
    }

    public function isAttributeSet(
        $key
    )
    {
    }

    public function setAttribute(
        $key,
        $value
    )
    {
    }

    public function getRawAttribute(
        $key,
        $default
    )
    {
    }

    public function fromBoolean(
        $value
    )
    {
    }

    public function fromString(
        $value
    )
    {
    }

    public function fromInt(
        $value
    )
    {
    }

    public function asBoolean(
        $value
    )
    {
    }

    public function asArrayFromCharacterSeparatedValue(
        $data,
        $character
    )
    {
    }

    public function fromArrayToCharacterSeparatedValue(
        $list,
        $character
    )
    {
    }

    public function fromSemanticVersion(
        $version
    )
    {
    }

    public function asSemanticVersion(
        $version
    )
    {
    }

    public static function convertBoolean(
        $value
    )
    {
    }

    public static function convertBooleanColumn(
        $column
    )
    {
    }

    public static function convertUnixTimestampIntegerToTimestampColumn(
        $column
    )
    {
    }

    protected function isBooleanColumn(
        $column
    )
    {
    }

    protected function isSemanticVersionColumn(
        $column
    )
    {
    }

    protected function isCommaSeparatedColumn(
        $column
    )
    {
    }

    protected function decryptValue(
        $cipherText,
        $key
    )
    {
    }

    protected function encryptValue(
        $text,
        $key
    )
    {
    }

    protected function aesEncryptValue(
        $text,
        $key
    )
    {
    }

    protected function aesDecryptValue(
        $text,
        $key
    )
    {
    }

    protected function serializeDate(
        $date
    )
    {
    }

    protected function decrypt(
        $value
    )
    {
    }

    protected function encrypt(
        $value
    )
    {
    }

    protected function asDateTime(
        $value
    )
    {
    }

    public function fromDateTime(
        $value
    )
    {
    }

    public function toArrayUsingColumnMapNames()
    {
    }

    public function validate()
    {
    }

    public function setCustomValidationMessages(
        $messages
    )
    {
    }

    public function errors()
    {
    }

    public function getCustomFieldValuesAttribute()
    {
    }

    protected function getCustomFieldType()
    {
    }

    protected function getCustomFieldRelId()
    {
    }

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     * @return void
     */
    public function __construct(
        $attributes
    )
    {
    }

    /**
     * Check if the model needs to be booted and if so, do it.
     *
     * @return void
     */
    protected function bootIfNotBooted()
    {
    }

    /**
     * Boot all of the bootable traits on the model.
     *
     * @return void
     */
    protected static function bootTraits()
    {
    }

    /**
     * Clear the list of booted models so they will be re-booted.
     *
     * @return void
     */
    public static function clearBootedModels()
    {
    }

    /**
     * Register a new global scope on the model.
     *
     * @param \Illuminate\Database\Eloquent\Scope|\Closure|string $scope
     * @param \Closure|null $implementation
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public static function addGlobalScope(
        $scope,
        $implementation
    )
    {
    }

    /**
     * Determine if a model has a global scope.
     *
     * @param \Illuminate\Database\Eloquent\Scope|string $scope
     * @return bool
     */
    public static function hasGlobalScope(
        $scope
    )
    {
    }

    /**
     * Get a global scope registered with the model.
     *
     * @param \Illuminate\Database\Eloquent\Scope|string $scope
     * @return \Illuminate\Database\Eloquent\Scope|\Closure|null
     */
    public static function getGlobalScope(
        $scope
    )
    {
    }

    /**
     * Get the global scopes for this class instance.
     *
     * @return array
     */
    public function getGlobalScopes()
    {
    }

    /**
     * Register an observer with the Model.
     *
     * @param object|string $class
     * @param int $priority
     * @return void
     */
    public static function observe(
        $class,
        $priority
    )
    {
    }

    /**
     * Fill the model with an array of attributes.
     *
     * @param array $attributes
     * @return $this
     *
     * @throws \Illuminate\Database\Eloquent\MassAssignmentException
     */
    public function fill(
        $attributes
    )
    {
    }

    /**
     * Fill the model with an array of attributes. Force mass assignment.
     *
     * @param array $attributes
     * @return $this
     */
    public function forceFill(
        $attributes
    )
    {
    }

    /**
     * Get the fillable attributes of a given array.
     *
     * @param array $attributes
     * @return array
     */
    protected function fillableFromArray(
        $attributes
    )
    {
    }

    /**
     * Create a new instance of the given model.
     *
     * @param array $attributes
     * @param bool $exists
     * @return static
     */
    public function newInstance(
        $attributes,
        $exists
    )
    {
    }

    /**
     * Create a new model instance that is existing.
     *
     * @param array $attributes
     * @param string|null $connection
     * @return static
     */
    public function newFromBuilder(
        $attributes,
        $connection
    )
    {
    }

    /**
     * Create a collection of models from plain arrays.
     *
     * @param array $items
     * @param string|null $connection
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function hydrate(
        $items,
        $connection
    )
    {
    }

    /**
     * Create a collection of models from a raw query.
     *
     * @param string $query
     * @param array $bindings
     * @param string|null $connection
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function hydrateRaw(
        $query,
        $bindings,
        $connection
    )
    {
    }

    /**
     * Save a new model and return the instance.
     *
     * @param array $attributes
     * @return static
     */
    public static function create(
        $attributes
    )
    {
    }

    /**
     * Save a new model and return the instance. Allow mass-assignment.
     *
     * @param array $attributes
     * @return static
     */
    public static function forceCreate(
        $attributes
    )
    {
    }

    /**
     * Begin querying the model.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function query()
    {
    }

    /**
     * Begin querying the model on a given connection.
     *
     * @param string|null $connection
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function on(
        $connection
    )
    {
    }

    /**
     * Begin querying the model on the write connection.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public static function onWriteConnection()
    {
    }

    /**
     * Get all of the models from the database.
     *
     * @param array|mixed $columns
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function all(
        $columns = "Array"
    )
    {
    }

    /**
     * Reload a fresh model instance from the database.
     *
     * @param array|string $with
     * @return $this|null
     */
    public function fresh(
        $with
    )
    {
    }

    /**
     * Eager load relations on the model.
     *
     * @param array|string $relations
     * @return $this
     */
    public function load(
        $relations
    )
    {
    }

    /**
     * Begin querying a model with eager loading.
     *
     * @param array|string $relations
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public static function with(
        $relations
    )
    {
    }

    /**
     * Append attributes to query when building a query.
     *
     * @param array|string $attributes
     * @return $this
     */
    public function append(
        $attributes
    )
    {
    }

    /**
     * Define a one-to-one relationship.
     *
     * @param string $related
     * @param string $foreignKey
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hasOne(
        $related,
        $foreignKey,
        $localKey
    )
    {
    }

    /**
     * Define a polymorphic one-to-one relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $type
     * @param string $id
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function morphOne(
        $related,
        $name,
        $type,
        $id,
        $localKey
    )
    {
    }

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @param string $related
     * @param string $foreignKey
     * @param string $otherKey
     * @param string $relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function belongsTo(
        $related,
        $foreignKey,
        $otherKey,
        $relation
    )
    {
    }

    /**
     * Define a polymorphic, inverse one-to-one or many relationship.
     *
     * @param string $name
     * @param string $type
     * @param string $id
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function morphTo(
        $name,
        $type,
        $id
    )
    {
    }

    /**
     * Retrieve the fully qualified class name from a slug.
     *
     * @param string $class
     * @return string
     */
    public function getActualClassNameForMorph(
        $class
    )
    {
    }

    /**
     * Define a one-to-many relationship.
     *
     * @param string $related
     * @param string $foreignKey
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hasMany(
        $related,
        $foreignKey,
        $localKey
    )
    {
    }

    /**
     * Define a has-many-through relationship.
     *
     * @param string $related
     * @param string $through
     * @param string|null $firstKey
     * @param string|null $secondKey
     * @param string|null $localKey
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function hasManyThrough(
        $related,
        $through,
        $firstKey,
        $secondKey,
        $localKey
    )
    {
    }

    /**
     * Define a polymorphic one-to-many relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $type
     * @param string $id
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function morphMany(
        $related,
        $name,
        $type,
        $id,
        $localKey
    )
    {
    }

    /**
     * Define a many-to-many relationship.
     *
     * @param string $related
     * @param string $table
     * @param string $foreignKey
     * @param string $otherKey
     * @param string $relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function belongsToMany(
        $related,
        $table,
        $foreignKey,
        $otherKey,
        $relation
    )
    {
    }

    /**
     * Define a polymorphic many-to-many relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $table
     * @param string $foreignKey
     * @param string $otherKey
     * @param bool $inverse
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function morphToMany(
        $related,
        $name,
        $table,
        $foreignKey,
        $otherKey,
        $inverse
    )
    {
    }

    /**
     * Define a polymorphic, inverse many-to-many relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $table
     * @param string $foreignKey
     * @param string $otherKey
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function morphedByMany(
        $related,
        $name,
        $table,
        $foreignKey,
        $otherKey
    )
    {
    }

    /**
     * Get the relationship name of the belongs to many.
     *
     * @return string
     */
    protected function getBelongsToManyCaller()
    {
    }

    /**
     * Get the joining table name for a many-to-many relation.
     *
     * @param string $related
     * @return string
     */
    public function joiningTable(
        $related
    )
    {
    }

    /**
     * Destroy the models for the given IDs.
     *
     * @param array|int $ids
     * @return int
     */
    public static function destroy(
        $ids
    )
    {
    }

    /**
     * Delete the model from the database.
     *
     * @return bool|null
     *
     * @throws \Exception
     */
    public function delete()
    {
    }

    /**
     * Force a hard delete on a soft deleted model.
     *
     * This method protects developers from running forceDelete when trait is missing.
     *
     * @return bool|null
     */
    public function forceDelete()
    {
    }

    /**
     * Perform the actual delete query on this model instance.
     *
     * @return void
     */
    protected function performDeleteOnModel()
    {
    }

    /**
     * Register a saving model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function saving(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a saved model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function saved(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register an updating model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function updating(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register an updated model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function updated(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a creating model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function creating(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a created model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function created(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a deleting model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function deleting(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a deleted model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function deleted(
        $callback,
        $priority
    )
    {
    }

    /**
     * Remove all of the event listeners for the model.
     *
     * @return void
     */
    public static function flushEventListeners()
    {
    }

    /**
     * Register a model event with the dispatcher.
     *
     * @param string $event
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    protected static function registerModelEvent(
        $event,
        $callback,
        $priority
    )
    {
    }

    /**
     * Get the observable event names.
     *
     * @return array
     */
    public function getObservableEvents()
    {
    }

    /**
     * Set the observable event names.
     *
     * @param array $observables
     * @return $this
     */
    public function setObservableEvents(
        $observables
    )
    {
    }

    /**
     * Add an observable event name.
     *
     * @param array|mixed $observables
     * @return void
     */
    public function addObservableEvents(
        $observables
    )
    {
    }

    /**
     * Remove an observable event name.
     *
     * @param array|mixed $observables
     * @return void
     */
    public function removeObservableEvents(
        $observables
    )
    {
    }

    /**
     * Increment a column's value by a given amount.
     *
     * @param string $column
     * @param int $amount
     * @param array $extra
     * @return int
     */
    protected function increment(
        $column,
        $amount = "1",
        $extra
    )
    {
    }

    /**
     * Decrement a column's value by a given amount.
     *
     * @param string $column
     * @param int $amount
     * @param array $extra
     * @return int
     */
    protected function decrement(
        $column,
        $amount = "1",
        $extra
    )
    {
    }

    /**
     * Run the increment or decrement method on the model.
     *
     * @param string $column
     * @param int $amount
     * @param array $extra
     * @param string $method
     * @return int
     */
    protected function incrementOrDecrement(
        $column,
        $amount,
        $extra,
        $method
    )
    {
    }

    /**
     * Increment the underlying attribute value and sync with original.
     *
     * @param string $column
     * @param int $amount
     * @param string $method
     * @return void
     */
    protected function incrementOrDecrementAttributeValue(
        $column,
        $amount,
        $method
    )
    {
    }

    /**
     * Update the model in the database.
     *
     * @param array $attributes
     * @param array $options
     * @return bool|int
     */
    public function update(
        $attributes,
        $options
    )
    {
    }

    /**
     * Save the model and all of its relationships.
     *
     * @return bool
     */
    public function push()
    {
    }

    /**
     * Save the model to the database.
     *
     * @param array $options
     * @return bool
     */
    public function save(
        $options
    )
    {
    }

    /**
     * Save the model to the database using transaction.
     *
     * @param array $options
     * @return bool
     *
     * @throws \Throwable
     */
    public function saveOrFail(
        $options
    )
    {
    }

    /**
     * Finish processing on a successful save operation.
     *
     * @param array $options
     * @return void
     */
    protected function finishSave(
        $options
    )
    {
    }

    /**
     * Perform a model update operation.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $options
     * @return bool
     */
    protected function performUpdate(
        $query,
        $options
    )
    {
    }

    /**
     * Perform a model insert operation.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $options
     * @return bool
     */
    protected function performInsert(
        $query,
        $options
    )
    {
    }

    /**
     * Insert the given attributes and set the ID on the model.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $attributes
     * @return void
     */
    protected function insertAndSetId(
        $query,
        $attributes
    )
    {
    }

    /**
     * Touch the owning relations of the model.
     *
     * @return void
     */
    public function touchOwners()
    {
    }

    /**
     * Determine if the model touches a given relation.
     *
     * @param string $relation
     * @return bool
     */
    public function touches(
        $relation
    )
    {
    }

    /**
     * Fire the given event for the model.
     *
     * @param string $event
     * @param bool $halt
     * @return mixed
     */
    protected function fireModelEvent(
        $event,
        $halt = "1"
    )
    {
    }

    /**
     * Set the keys for a save update query.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function setKeysForSaveQuery(
        $query
    )
    {
    }

    /**
     * Get the primary key value for a save query.
     *
     * @return mixed
     */
    protected function getKeyForSaveQuery()
    {
    }

    /**
     * Update the model's update timestamp.
     *
     * @return bool
     */
    public function touch()
    {
    }

    /**
     * Update the creation and update timestamps.
     *
     * @return void
     */
    protected function updateTimestamps()
    {
    }

    /**
     * Set the value of the "created at" attribute.
     *
     * @param mixed $value
     * @return $this
     */
    public function setCreatedAt(
        $value
    )
    {
    }

    /**
     * Set the value of the "updated at" attribute.
     *
     * @param mixed $value
     * @return $this
     */
    public function setUpdatedAt(
        $value
    )
    {
    }

    /**
     * Get the name of the "created at" column.
     *
     * @return string
     */
    public function getCreatedAtColumn()
    {
    }

    /**
     * Get the name of the "updated at" column.
     *
     * @return string
     */
    public function getUpdatedAtColumn()
    {
    }

    /**
     * Get a fresh timestamp for the model.
     *
     * @return \Carbon\Carbon
     */
    public function freshTimestamp()
    {
    }

    /**
     * Get a fresh timestamp for the model.
     *
     * @return string
     */
    public function freshTimestampString()
    {
    }

    /**
     * Get a new query builder for the model's table.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQuery()
    {
    }

    /**
     * Get a new query instance without a given scope.
     *
     * @param \Illuminate\Database\Eloquent\Scope|string $scope
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQueryWithoutScope(
        $scope
    )
    {
    }

    /**
     * Get a new query builder that doesn't have any global scopes.
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newQueryWithoutScopes()
    {
    }

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder(
        $query
    )
    {
    }

    /**
     * Get a new query builder instance for the connection.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    protected function newBaseQueryBuilder()
    {
    }

    /**
     * Create a new Eloquent Collection instance.
     *
     * @param array $models
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(
        $models
    )
    {
    }

    /**
     * Create a new pivot model instance.
     *
     * @param \Illuminate\Database\Eloquent\Model $parent
     * @param array $attributes
     * @param string $table
     * @param bool $exists
     * @return \Illuminate\Database\Eloquent\Relations\Pivot
     */
    public function newPivot(
        $parent,
        $attributes,
        $table,
        $exists
    )
    {
    }

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
    }

    /**
     * Set the table associated with the model.
     *
     * @param string $table
     * @return $this
     */
    public function setTable(
        $table
    )
    {
    }

    /**
     * Get the value of the model's primary key.
     *
     * @return mixed
     */
    public function getKey()
    {
    }

    /**
     * Get the queueable identity for the entity.
     *
     * @return mixed
     */
    public function getQueueableId()
    {
    }

    /**
     * Get the primary key for the model.
     *
     * @return string
     */
    public function getKeyName()
    {
    }

    /**
     * Set the primary key for the model.
     *
     * @param string $key
     * @return $this
     */
    public function setKeyName(
        $key
    )
    {
    }

    /**
     * Get the table qualified key name.
     *
     * @return string
     */
    public function getQualifiedKeyName()
    {
    }

    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKey()
    {
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
    }

    /**
     * Determine if the model uses timestamps.
     *
     * @return bool
     */
    public function usesTimestamps()
    {
    }

    /**
     * Get the polymorphic relationship columns.
     *
     * @param string $name
     * @param string $type
     * @param string $id
     * @return array
     */
    protected function getMorphs(
        $name,
        $type,
        $id
    )
    {
    }

    /**
     * Get the class name for polymorphic relations.
     *
     * @return string
     */
    public function getMorphClass()
    {
    }

    /**
     * Get the number of models to return per page.
     *
     * @return int
     */
    public function getPerPage()
    {
    }

    /**
     * Set the number of models to return per page.
     *
     * @param int $perPage
     * @return $this
     */
    public function setPerPage(
        $perPage
    )
    {
    }

    /**
     * Get the default foreign key name for the model.
     *
     * @return string
     */
    public function getForeignKey()
    {
    }

    /**
     * Get the hidden attributes for the model.
     *
     * @return array
     */
    public function getHidden()
    {
    }

    /**
     * Set the hidden attributes for the model.
     *
     * @param array $hidden
     * @return $this
     */
    public function setHidden(
        $hidden
    )
    {
    }

    /**
     * Add hidden attributes for the model.
     *
     * @param array|string|null $attributes
     * @return void
     */
    public function addHidden(
        $attributes
    )
    {
    }

    /**
     * Make the given, typically hidden, attributes visible.
     *
     * @param array|string $attributes
     * @return $this
     */
    public function makeVisible(
        $attributes
    )
    {
    }

    /**
     * Make the given, typically hidden, attributes visible.
     *
     * @param array|string $attributes
     * @return $this
     *
     * @deprecated since version 5.2. Use the "makeVisible" method directly.
     */
    public function withHidden(
        $attributes
    )
    {
    }

    /**
     * Get the visible attributes for the model.
     *
     * @return array
     */
    public function getVisible()
    {
    }

    /**
     * Set the visible attributes for the model.
     *
     * @param array $visible
     * @return $this
     */
    public function setVisible(
        $visible
    )
    {
    }

    /**
     * Add visible attributes for the model.
     *
     * @param array|string|null $attributes
     * @return void
     */
    public function addVisible(
        $attributes
    )
    {
    }

    /**
     * Set the accessors to append to model arrays.
     *
     * @param array $appends
     * @return $this
     */
    public function setAppends(
        $appends
    )
    {
    }

    /**
     * Get the fillable attributes for the model.
     *
     * @return array
     */
    public function getFillable()
    {
    }

    /**
     * Set the fillable attributes for the model.
     *
     * @param array $fillable
     * @return $this
     */
    public function fillable(
        $fillable
    )
    {
    }

    /**
     * Get the guarded attributes for the model.
     *
     * @return array
     */
    public function getGuarded()
    {
    }

    /**
     * Set the guarded attributes for the model.
     *
     * @param array $guarded
     * @return $this
     */
    public function guard(
        $guarded
    )
    {
    }

    /**
     * Disable all mass assignable restrictions.
     *
     * @param bool $state
     * @return void
     */
    public static function unguard(
        $state = "1"
    )
    {
    }

    /**
     * Enable the mass assignment restrictions.
     *
     * @return void
     */
    public static function reguard()
    {
    }

    /**
     * Determine if current state is "unguarded".
     *
     * @return bool
     */
    public static function isUnguarded()
    {
    }

    /**
     * Run the given callable while being unguarded.
     *
     * @param callable $callback
     * @return mixed
     */
    public static function unguarded(
        $callback
    )
    {
    }

    /**
     * Determine if the given attribute may be mass assigned.
     *
     * @param string $key
     * @return bool
     */
    public function isFillable(
        $key
    )
    {
    }

    /**
     * Determine if the given key is guarded.
     *
     * @param string $key
     * @return bool
     */
    public function isGuarded(
        $key
    )
    {
    }

    /**
     * Determine if the model is totally guarded.
     *
     * @return bool
     */
    public function totallyGuarded()
    {
    }

    /**
     * Remove the table name from a given key.
     *
     * @param string $key
     * @return string
     */
    protected function removeTableFromKey(
        $key
    )
    {
    }

    /**
     * Get the relationships that are touched on save.
     *
     * @return array
     */
    public function getTouchedRelations()
    {
    }

    /**
     * Set the relationships that are touched on save.
     *
     * @param array $touches
     * @return $this
     */
    public function setTouchedRelations(
        $touches
    )
    {
    }

    /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing()
    {
    }

    /**
     * Set whether IDs are incrementing.
     *
     * @param bool $value
     * @return $this
     */
    public function setIncrementing(
        $value
    )
    {
    }

    /**
     * Convert the model instance to JSON.
     *
     * @param int $options
     * @return string
     */
    public function toJson(
        $options
    )
    {
    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    public function jsonSerialize()
    {
    }

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
    }

    /**
     * Convert the model's attributes to an array.
     *
     * @return array
     */
    public function attributesToArray()
    {
    }

    /**
     * Get an attribute array of all arrayable attributes.
     *
     * @return array
     */
    protected function getArrayableAttributes()
    {
    }

    /**
     * Get all of the appendable values that are arrayable.
     *
     * @return array
     */
    protected function getArrayableAppends()
    {
    }

    /**
     * Get the model's relationships in array form.
     *
     * @return array
     */
    public function relationsToArray()
    {
    }

    /**
     * Get an attribute array of all arrayable relations.
     *
     * @return array
     */
    protected function getArrayableRelations()
    {
    }

    /**
     * Get an attribute array of all arrayable values.
     *
     * @param array $values
     * @return array
     */
    protected function getArrayableItems(
        $values
    )
    {
    }

    /**
     * Get a plain attribute (not a relationship).
     *
     * @param string $key
     * @return mixed
     */
    public function getAttributeValue(
        $key
    )
    {
    }

    /**
     * Get a relationship.
     *
     * @param string $key
     * @return mixed
     */
    public function getRelationValue(
        $key
    )
    {
    }

    /**
     * Get an attribute from the $attributes array.
     *
     * @param string $key
     * @return mixed
     */
    protected function getAttributeFromArray(
        $key
    )
    {
    }

    /**
     * Get a relationship value from a method.
     *
     * @param string $method
     * @return mixed
     *
     * @throws \LogicException
     */
    protected function getRelationshipFromMethod(
        $method
    )
    {
    }

    /**
     * Determine if a get mutator exists for an attribute.
     *
     * @param string $key
     * @return bool
     */
    public function hasGetMutator(
        $key
    )
    {
    }

    /**
     * Get the value of an attribute using its mutator.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function mutateAttribute(
        $key,
        $value
    )
    {
    }

    /**
     * Get the value of an attribute using its mutator for array conversion.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function mutateAttributeForArray(
        $key,
        $value
    )
    {
    }

    /**
     * Determine whether an attribute should be cast to a native type.
     *
     * @param string $key
     * @param array|string|null $types
     * @return bool
     */
    public function hasCast(
        $key,
        $types
    )
    {
    }

    /**
     * Get the casts array.
     *
     * @return array
     */
    public function getCasts()
    {
    }

    /**
     * Determine whether a value is Date / DateTime castable for inbound manipulation.
     *
     * @param string $key
     * @return bool
     */
    protected function isDateCastable(
        $key
    )
    {
    }

    /**
     * Determine whether a value is JSON castable for inbound manipulation.
     *
     * @param string $key
     * @return bool
     */
    protected function isJsonCastable(
        $key
    )
    {
    }

    /**
     * Get the type of cast for a model attribute.
     *
     * @param string $key
     * @return string
     */
    protected function getCastType(
        $key
    )
    {
    }

    /**
     * Cast an attribute to a native PHP type.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function castAttribute(
        $key,
        $value
    )
    {
    }

    /**
     * Determine if a set mutator exists for an attribute.
     *
     * @param string $key
     * @return bool
     */
    public function hasSetMutator(
        $key
    )
    {
    }

    /**
     * Get the attributes that should be converted to dates.
     *
     * @return array
     */
    public function getDates()
    {
    }

    /**
     * Return a timestamp as unix timestamp.
     *
     * @param mixed $value
     * @return int
     */
    protected function asTimeStamp(
        $value
    )
    {
    }

    /**
     * Get the format for database stored dates.
     *
     * @return string
     */
    protected function getDateFormat()
    {
    }

    /**
     * Set the date format used by the model.
     *
     * @param string $format
     * @return $this
     */
    public function setDateFormat(
        $format
    )
    {
    }

    /**
     * Encode the given value as JSON.
     *
     * @param mixed $value
     * @return string
     */
    protected function asJson(
        $value
    )
    {
    }

    /**
     * Decode the given JSON back into an array or object.
     *
     * @param string $value
     * @param bool $asObject
     * @return mixed
     */
    public function fromJson(
        $value,
        $asObject
    )
    {
    }

    /**
     * Clone the model into a new, non-existing instance.
     *
     * @param array|null $except
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function replicate(
        $except
    )
    {
    }

    /**
     * Get all of the current attributes on the model.
     *
     * @return array
     */
    public function getAttributes()
    {
    }

    /**
     * Set the array of model attributes. No checking is done.
     *
     * @param array $attributes
     * @param bool $sync
     * @return $this
     */
    public function setRawAttributes(
        $attributes,
        $sync
    )
    {
    }

    /**
     * Get the model's original attribute values.
     *
     * @param string|null $key
     * @param mixed $default
     * @return mixed|array
     */
    public function getOriginal(
        $key,
        $default
    )
    {
    }

    /**
     * Sync the original attributes with the current.
     *
     * @return $this
     */
    public function syncOriginal()
    {
    }

    /**
     * Sync a single original attribute with its current value.
     *
     * @param string $attribute
     * @return $this
     */
    public function syncOriginalAttribute(
        $attribute
    )
    {
    }

    /**
     * Determine if the model or given attribute(s) have been modified.
     *
     * @param array|string|null $attributes
     * @return bool
     */
    public function isDirty(
        $attributes
    )
    {
    }

    /**
     * Get the attributes that have been changed since last sync.
     *
     * @return array
     */
    public function getDirty()
    {
    }

    /**
     * Determine if the new and old values for a given key are numerically equivalent.
     *
     * @param string $key
     * @return bool
     */
    protected function originalIsNumericallyEquivalent(
        $key
    )
    {
    }

    /**
     * Get all the loaded relations for the instance.
     *
     * @return array
     */
    public function getRelations()
    {
    }

    /**
     * Get a specified relationship.
     *
     * @param string $relation
     * @return mixed
     */
    public function getRelation(
        $relation
    )
    {
    }

    /**
     * Determine if the given relation is loaded.
     *
     * @param string $key
     * @return bool
     */
    public function relationLoaded(
        $key
    )
    {
    }

    /**
     * Set the specific relationship in the model.
     *
     * @param string $relation
     * @param mixed $value
     * @return $this
     */
    public function setRelation(
        $relation,
        $value
    )
    {
    }

    /**
     * Set the entire relations array on the model.
     *
     * @param array $relations
     * @return $this
     */
    public function setRelations(
        $relations
    )
    {
    }

    /**
     * Get the database connection for the model.
     *
     * @return \Illuminate\Database\Connection
     */
    public function getConnection()
    {
    }

    /**
     * Get the current connection name for the model.
     *
     * @return string
     */
    public function getConnectionName()
    {
    }

    /**
     * Set the connection associated with the model.
     *
     * @param string $name
     * @return $this
     */
    public function setConnection(
        $name
    )
    {
    }

    /**
     * Resolve a connection instance.
     *
     * @param string|null $connection
     * @return \Illuminate\Database\Connection
     */
    public static function resolveConnection(
        $connection
    )
    {
    }

    /**
     * Get the connection resolver instance.
     *
     * @return \Illuminate\Database\ConnectionResolverInterface
     */
    public static function getConnectionResolver()
    {
    }

    /**
     * Set the connection resolver instance.
     *
     * @param \Illuminate\Database\ConnectionResolverInterface $resolver
     * @return void
     */
    public static function setConnectionResolver(
        $resolver
    )
    {
    }

    /**
     * Unset the connection resolver for models.
     *
     * @return void
     */
    public static function unsetConnectionResolver()
    {
    }

    /**
     * Get the event dispatcher instance.
     *
     * @return \Illuminate\Contracts\Events\Dispatcher
     */
    public static function getEventDispatcher()
    {
    }

    /**
     * Set the event dispatcher instance.
     *
     * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
     * @return void
     */
    public static function setEventDispatcher(
        $dispatcher
    )
    {
    }

    /**
     * Unset the event dispatcher for models.
     *
     * @return void
     */
    public static function unsetEventDispatcher()
    {
    }

    /**
     * Get the mutated attributes for a given instance.
     *
     * @return array
     */
    public function getMutatedAttributes()
    {
    }

    /**
     * Extract and cache all the mutated attributes of a class.
     *
     * @param string $class
     * @return void
     */
    public static function cacheMutatedAttributes(
        $class
    )
    {
    }

    /**
     * Dynamically retrieve attributes on the model.
     *
     * @param string $key
     * @return mixed
     */
    public function __get(
        $key
    )
    {
    }

    /**
     * Dynamically set attributes on the model.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function __set(
        $key,
        $value
    )
    {
    }

    /**
     * Determine if the given attribute exists.
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists(
        $offset
    )
    {
    }

    /**
     * Get the value for a given offset.
     *
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet(
        $offset
    )
    {
    }

    /**
     * Set the value for a given offset.
     *
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet(
        $offset,
        $value
    )
    {
    }

    /**
     * Unset the value for a given offset.
     *
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset(
        $offset
    )
    {
    }

    /**
     * Determine if an attribute or relation exists on the model.
     *
     * @param string $key
     * @return bool
     */
    public function __isset(
        $key
    )
    {
    }

    /**
     * Unset an attribute on the model.
     *
     * @param string $key
     * @return void
     */
    public function __unset(
        $key
    )
    {
    }

    /**
     * Handle dynamic method calls into the model.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function __call(
        $method,
        $parameters
    )
    {
    }

    /**
     * Handle dynamic static method calls into the method.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public static function __callStatic(
        $method,
        $parameters
    )
    {
    }

    /**
     * Convert the model to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
    }

    /**
     * When a model is being unserialized, check if it needs to be booted.
     *
     * @return void
     */
    public function __wakeup()
    {
    }
}

namespace WHMCS\Model;
abstract class AbstractKeyValuePair
{

    protected $booleanValues = "";

    protected $nonEmptyValues = "";

    protected $semanticVersionValues = "";

    protected $commaSeparatedValues = "";

    protected $characterSeparatedValues = "";

    public $unique = "";

    public $guardedForUpdate = "";

    protected $columnMap = "";

    protected $booleans = "";

    protected $strings = "";

    protected $ints = "";

    protected $semanticVersions = "";

    protected $commaSeparated = "";

    protected $characterSeparated = "";

    protected static $tableColumnCache = "";

    protected $rules = "";

    protected $errors = "";

    protected $customValidationMessages = "";
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = "";
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "";
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = "";
    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = "";
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = "";
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = "";
    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = "";
    /**
     * The model attribute's original state.
     *
     * @var array
     */
    protected $original = "";
    /**
     * The loaded relationships for the model.
     *
     * @var array
     */
    protected $relations = "";
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = "";
    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = "";
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = "";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = "";
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = "";
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = "";
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = "";
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = "";
    /**
     * The relationships that should be touched on save.
     *
     * @var array
     */
    protected $touches = "";
    /**
     * User exposed observable events.
     *
     * @var array
     */
    protected $observables = "";
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = "";
    /**
     * The class name to be used in polymorphic relations.
     *
     * @var string
     */
    protected $morphClass = "";
    /**
     * Indicates if the model exists.
     *
     * @var bool
     */
    public $exists = "";
    /**
     * Indicates if the model was inserted during the current request lifecycle.
     *
     * @var bool
     */
    public $wasRecentlyCreated = "";
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @var bool
     */
    public static $snakeAttributes;
    /**
     * The connection resolver instance.
     *
     * @var \Illuminate\Database\ConnectionResolverInterface
     */
    protected static $resolver = "";
    /**
     * The event dispatcher instance.
     *
     * @var \Illuminate\Contracts\Events\Dispatcher
     */
    protected static $dispatcher = "";
    /**
     * The array of booted models.
     *
     * @var array
     */
    protected static $booted = "";
    /**
     * The array of global scopes on the model.
     *
     * @var array
     */
    protected static $globalScopes = "";
    /**
     * Indicates if all mass assignment is enabled.
     *
     * @var bool
     */
    protected static $unguarded = "";
    /**
     * The cache of the mutated attributes for each class.
     *
     * @var array
     */
    protected static $mutatorCache = "";
    /**
     * The many to many relationship methods.
     *
     * @var array
     */
    public static $manyMethods;

    public function __construct(
        $attributes
    )
    {
    }

    public function setAttribute(
        $key,
        $value
    )
    {
    }

    public function getAttribute(
        $key
    )
    {
    }

    public function isCommaSeparatedValue()
    {
    }

    public static function boot()
    {
    }

    public function clearColumnCache()
    {
    }

    protected function hasColumn(
        $column
    )
    {
    }

    public function isAttributeSet(
        $key
    )
    {
    }

    public function getRawAttribute(
        $key,
        $default
    )
    {
    }

    public function fromBoolean(
        $value
    )
    {
    }

    public function fromString(
        $value
    )
    {
    }

    public function fromInt(
        $value
    )
    {
    }

    public function asBoolean(
        $value
    )
    {
    }

    public function asArrayFromCharacterSeparatedValue(
        $data,
        $character
    )
    {
    }

    public function fromArrayToCharacterSeparatedValue(
        $list,
        $character
    )
    {
    }

    public function fromSemanticVersion(
        $version
    )
    {
    }

    public function asSemanticVersion(
        $version
    )
    {
    }

    public static function convertBoolean(
        $value
    )
    {
    }

    public static function convertBooleanColumn(
        $column
    )
    {
    }

    public static function convertUnixTimestampIntegerToTimestampColumn(
        $column
    )
    {
    }

    protected function isBooleanColumn(
        $column
    )
    {
    }

    protected function isSemanticVersionColumn(
        $column
    )
    {
    }

    protected function isCommaSeparatedColumn(
        $column
    )
    {
    }

    protected function decryptValue(
        $cipherText,
        $key
    )
    {
    }

    protected function encryptValue(
        $text,
        $key
    )
    {
    }

    protected function aesEncryptValue(
        $text,
        $key
    )
    {
    }

    protected function aesDecryptValue(
        $text,
        $key
    )
    {
    }

    protected function serializeDate(
        $date
    )
    {
    }

    protected function decrypt(
        $value
    )
    {
    }

    protected function encrypt(
        $value
    )
    {
    }

    protected function asDateTime(
        $value
    )
    {
    }

    public function fromDateTime(
        $value
    )
    {
    }

    public function toArrayUsingColumnMapNames()
    {
    }

    public function validate()
    {
    }

    public function setCustomValidationMessages(
        $messages
    )
    {
    }

    public function errors()
    {
    }

    public function getCustomFieldValuesAttribute()
    {
    }

    protected function getCustomFieldType()
    {
    }

    protected function getCustomFieldRelId()
    {
    }

    /**
     * Check if the model needs to be booted and if so, do it.
     *
     * @return void
     */
    protected function bootIfNotBooted()
    {
    }

    /**
     * Boot all of the bootable traits on the model.
     *
     * @return void
     */
    protected static function bootTraits()
    {
    }

    /**
     * Clear the list of booted models so they will be re-booted.
     *
     * @return void
     */
    public static function clearBootedModels()
    {
    }

    /**
     * Register a new global scope on the model.
     *
     * @param \Illuminate\Database\Eloquent\Scope|\Closure|string $scope
     * @param \Closure|null $implementation
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public static function addGlobalScope(
        $scope,
        $implementation
    )
    {
    }

    /**
     * Determine if a model has a global scope.
     *
     * @param \Illuminate\Database\Eloquent\Scope|string $scope
     * @return bool
     */
    public static function hasGlobalScope(
        $scope
    )
    {
    }

    /**
     * Get a global scope registered with the model.
     *
     * @param \Illuminate\Database\Eloquent\Scope|string $scope
     * @return \Illuminate\Database\Eloquent\Scope|\Closure|null
     */
    public static function getGlobalScope(
        $scope
    )
    {
    }

    /**
     * Get the global scopes for this class instance.
     *
     * @return array
     */
    public function getGlobalScopes()
    {
    }

    /**
     * Register an observer with the Model.
     *
     * @param object|string $class
     * @param int $priority
     * @return void
     */
    public static function observe(
        $class,
        $priority
    )
    {
    }

    /**
     * Fill the model with an array of attributes.
     *
     * @param array $attributes
     * @return $this
     *
     * @throws \Illuminate\Database\Eloquent\MassAssignmentException
     */
    public function fill(
        $attributes
    )
    {
    }

    /**
     * Fill the model with an array of attributes. Force mass assignment.
     *
     * @param array $attributes
     * @return $this
     */
    public function forceFill(
        $attributes
    )
    {
    }

    /**
     * Get the fillable attributes of a given array.
     *
     * @param array $attributes
     * @return array
     */
    protected function fillableFromArray(
        $attributes
    )
    {
    }

    /**
     * Create a new instance of the given model.
     *
     * @param array $attributes
     * @param bool $exists
     * @return static
     */
    public function newInstance(
        $attributes,
        $exists
    )
    {
    }

    /**
     * Create a new model instance that is existing.
     *
     * @param array $attributes
     * @param string|null $connection
     * @return static
     */
    public function newFromBuilder(
        $attributes,
        $connection
    )
    {
    }

    /**
     * Create a collection of models from plain arrays.
     *
     * @param array $items
     * @param string|null $connection
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function hydrate(
        $items,
        $connection
    )
    {
    }

    /**
     * Create a collection of models from a raw query.
     *
     * @param string $query
     * @param array $bindings
     * @param string|null $connection
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function hydrateRaw(
        $query,
        $bindings,
        $connection
    )
    {
    }

    /**
     * Save a new model and return the instance.
     *
     * @param array $attributes
     * @return static
     */
    public static function create(
        $attributes
    )
    {
    }

    /**
     * Save a new model and return the instance. Allow mass-assignment.
     *
     * @param array $attributes
     * @return static
     */
    public static function forceCreate(
        $attributes
    )
    {
    }

    /**
     * Begin querying the model.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function query()
    {
    }

    /**
     * Begin querying the model on a given connection.
     *
     * @param string|null $connection
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function on(
        $connection
    )
    {
    }

    /**
     * Begin querying the model on the write connection.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public static function onWriteConnection()
    {
    }

    /**
     * Get all of the models from the database.
     *
     * @param array|mixed $columns
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function all(
        $columns = "Array"
    )
    {
    }

    /**
     * Reload a fresh model instance from the database.
     *
     * @param array|string $with
     * @return $this|null
     */
    public function fresh(
        $with
    )
    {
    }

    /**
     * Eager load relations on the model.
     *
     * @param array|string $relations
     * @return $this
     */
    public function load(
        $relations
    )
    {
    }

    /**
     * Begin querying a model with eager loading.
     *
     * @param array|string $relations
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public static function with(
        $relations
    )
    {
    }

    /**
     * Append attributes to query when building a query.
     *
     * @param array|string $attributes
     * @return $this
     */
    public function append(
        $attributes
    )
    {
    }

    /**
     * Define a one-to-one relationship.
     *
     * @param string $related
     * @param string $foreignKey
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hasOne(
        $related,
        $foreignKey,
        $localKey
    )
    {
    }

    /**
     * Define a polymorphic one-to-one relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $type
     * @param string $id
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function morphOne(
        $related,
        $name,
        $type,
        $id,
        $localKey
    )
    {
    }

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @param string $related
     * @param string $foreignKey
     * @param string $otherKey
     * @param string $relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function belongsTo(
        $related,
        $foreignKey,
        $otherKey,
        $relation
    )
    {
    }

    /**
     * Define a polymorphic, inverse one-to-one or many relationship.
     *
     * @param string $name
     * @param string $type
     * @param string $id
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function morphTo(
        $name,
        $type,
        $id
    )
    {
    }

    /**
     * Retrieve the fully qualified class name from a slug.
     *
     * @param string $class
     * @return string
     */
    public function getActualClassNameForMorph(
        $class
    )
    {
    }

    /**
     * Define a one-to-many relationship.
     *
     * @param string $related
     * @param string $foreignKey
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hasMany(
        $related,
        $foreignKey,
        $localKey
    )
    {
    }

    /**
     * Define a has-many-through relationship.
     *
     * @param string $related
     * @param string $through
     * @param string|null $firstKey
     * @param string|null $secondKey
     * @param string|null $localKey
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function hasManyThrough(
        $related,
        $through,
        $firstKey,
        $secondKey,
        $localKey
    )
    {
    }

    /**
     * Define a polymorphic one-to-many relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $type
     * @param string $id
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function morphMany(
        $related,
        $name,
        $type,
        $id,
        $localKey
    )
    {
    }

    /**
     * Define a many-to-many relationship.
     *
     * @param string $related
     * @param string $table
     * @param string $foreignKey
     * @param string $otherKey
     * @param string $relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function belongsToMany(
        $related,
        $table,
        $foreignKey,
        $otherKey,
        $relation
    )
    {
    }

    /**
     * Define a polymorphic many-to-many relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $table
     * @param string $foreignKey
     * @param string $otherKey
     * @param bool $inverse
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function morphToMany(
        $related,
        $name,
        $table,
        $foreignKey,
        $otherKey,
        $inverse
    )
    {
    }

    /**
     * Define a polymorphic, inverse many-to-many relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $table
     * @param string $foreignKey
     * @param string $otherKey
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function morphedByMany(
        $related,
        $name,
        $table,
        $foreignKey,
        $otherKey
    )
    {
    }

    /**
     * Get the relationship name of the belongs to many.
     *
     * @return string
     */
    protected function getBelongsToManyCaller()
    {
    }

    /**
     * Get the joining table name for a many-to-many relation.
     *
     * @param string $related
     * @return string
     */
    public function joiningTable(
        $related
    )
    {
    }

    /**
     * Destroy the models for the given IDs.
     *
     * @param array|int $ids
     * @return int
     */
    public static function destroy(
        $ids
    )
    {
    }

    /**
     * Delete the model from the database.
     *
     * @return bool|null
     *
     * @throws \Exception
     */
    public function delete()
    {
    }

    /**
     * Force a hard delete on a soft deleted model.
     *
     * This method protects developers from running forceDelete when trait is missing.
     *
     * @return bool|null
     */
    public function forceDelete()
    {
    }

    /**
     * Perform the actual delete query on this model instance.
     *
     * @return void
     */
    protected function performDeleteOnModel()
    {
    }

    /**
     * Register a saving model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function saving(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a saved model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function saved(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register an updating model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function updating(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register an updated model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function updated(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a creating model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function creating(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a created model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function created(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a deleting model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function deleting(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a deleted model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function deleted(
        $callback,
        $priority
    )
    {
    }

    /**
     * Remove all of the event listeners for the model.
     *
     * @return void
     */
    public static function flushEventListeners()
    {
    }

    /**
     * Register a model event with the dispatcher.
     *
     * @param string $event
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    protected static function registerModelEvent(
        $event,
        $callback,
        $priority
    )
    {
    }

    /**
     * Get the observable event names.
     *
     * @return array
     */
    public function getObservableEvents()
    {
    }

    /**
     * Set the observable event names.
     *
     * @param array $observables
     * @return $this
     */
    public function setObservableEvents(
        $observables
    )
    {
    }

    /**
     * Add an observable event name.
     *
     * @param array|mixed $observables
     * @return void
     */
    public function addObservableEvents(
        $observables
    )
    {
    }

    /**
     * Remove an observable event name.
     *
     * @param array|mixed $observables
     * @return void
     */
    public function removeObservableEvents(
        $observables
    )
    {
    }

    /**
     * Increment a column's value by a given amount.
     *
     * @param string $column
     * @param int $amount
     * @param array $extra
     * @return int
     */
    protected function increment(
        $column,
        $amount = "1",
        $extra
    )
    {
    }

    /**
     * Decrement a column's value by a given amount.
     *
     * @param string $column
     * @param int $amount
     * @param array $extra
     * @return int
     */
    protected function decrement(
        $column,
        $amount = "1",
        $extra
    )
    {
    }

    /**
     * Run the increment or decrement method on the model.
     *
     * @param string $column
     * @param int $amount
     * @param array $extra
     * @param string $method
     * @return int
     */
    protected function incrementOrDecrement(
        $column,
        $amount,
        $extra,
        $method
    )
    {
    }

    /**
     * Increment the underlying attribute value and sync with original.
     *
     * @param string $column
     * @param int $amount
     * @param string $method
     * @return void
     */
    protected function incrementOrDecrementAttributeValue(
        $column,
        $amount,
        $method
    )
    {
    }

    /**
     * Update the model in the database.
     *
     * @param array $attributes
     * @param array $options
     * @return bool|int
     */
    public function update(
        $attributes,
        $options
    )
    {
    }

    /**
     * Save the model and all of its relationships.
     *
     * @return bool
     */
    public function push()
    {
    }

    /**
     * Save the model to the database.
     *
     * @param array $options
     * @return bool
     */
    public function save(
        $options
    )
    {
    }

    /**
     * Save the model to the database using transaction.
     *
     * @param array $options
     * @return bool
     *
     * @throws \Throwable
     */
    public function saveOrFail(
        $options
    )
    {
    }

    /**
     * Finish processing on a successful save operation.
     *
     * @param array $options
     * @return void
     */
    protected function finishSave(
        $options
    )
    {
    }

    /**
     * Perform a model update operation.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $options
     * @return bool
     */
    protected function performUpdate(
        $query,
        $options
    )
    {
    }

    /**
     * Perform a model insert operation.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $options
     * @return bool
     */
    protected function performInsert(
        $query,
        $options
    )
    {
    }

    /**
     * Insert the given attributes and set the ID on the model.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $attributes
     * @return void
     */
    protected function insertAndSetId(
        $query,
        $attributes
    )
    {
    }

    /**
     * Touch the owning relations of the model.
     *
     * @return void
     */
    public function touchOwners()
    {
    }

    /**
     * Determine if the model touches a given relation.
     *
     * @param string $relation
     * @return bool
     */
    public function touches(
        $relation
    )
    {
    }

    /**
     * Fire the given event for the model.
     *
     * @param string $event
     * @param bool $halt
     * @return mixed
     */
    protected function fireModelEvent(
        $event,
        $halt = "1"
    )
    {
    }

    /**
     * Set the keys for a save update query.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function setKeysForSaveQuery(
        $query
    )
    {
    }

    /**
     * Get the primary key value for a save query.
     *
     * @return mixed
     */
    protected function getKeyForSaveQuery()
    {
    }

    /**
     * Update the model's update timestamp.
     *
     * @return bool
     */
    public function touch()
    {
    }

    /**
     * Update the creation and update timestamps.
     *
     * @return void
     */
    protected function updateTimestamps()
    {
    }

    /**
     * Set the value of the "created at" attribute.
     *
     * @param mixed $value
     * @return $this
     */
    public function setCreatedAt(
        $value
    )
    {
    }

    /**
     * Set the value of the "updated at" attribute.
     *
     * @param mixed $value
     * @return $this
     */
    public function setUpdatedAt(
        $value
    )
    {
    }

    /**
     * Get the name of the "created at" column.
     *
     * @return string
     */
    public function getCreatedAtColumn()
    {
    }

    /**
     * Get the name of the "updated at" column.
     *
     * @return string
     */
    public function getUpdatedAtColumn()
    {
    }

    /**
     * Get a fresh timestamp for the model.
     *
     * @return \Carbon\Carbon
     */
    public function freshTimestamp()
    {
    }

    /**
     * Get a fresh timestamp for the model.
     *
     * @return string
     */
    public function freshTimestampString()
    {
    }

    /**
     * Get a new query builder for the model's table.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQuery()
    {
    }

    /**
     * Get a new query instance without a given scope.
     *
     * @param \Illuminate\Database\Eloquent\Scope|string $scope
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQueryWithoutScope(
        $scope
    )
    {
    }

    /**
     * Get a new query builder that doesn't have any global scopes.
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newQueryWithoutScopes()
    {
    }

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder(
        $query
    )
    {
    }

    /**
     * Get a new query builder instance for the connection.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    protected function newBaseQueryBuilder()
    {
    }

    /**
     * Create a new Eloquent Collection instance.
     *
     * @param array $models
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(
        $models
    )
    {
    }

    /**
     * Create a new pivot model instance.
     *
     * @param \Illuminate\Database\Eloquent\Model $parent
     * @param array $attributes
     * @param string $table
     * @param bool $exists
     * @return \Illuminate\Database\Eloquent\Relations\Pivot
     */
    public function newPivot(
        $parent,
        $attributes,
        $table,
        $exists
    )
    {
    }

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
    }

    /**
     * Set the table associated with the model.
     *
     * @param string $table
     * @return $this
     */
    public function setTable(
        $table
    )
    {
    }

    /**
     * Get the value of the model's primary key.
     *
     * @return mixed
     */
    public function getKey()
    {
    }

    /**
     * Get the queueable identity for the entity.
     *
     * @return mixed
     */
    public function getQueueableId()
    {
    }

    /**
     * Get the primary key for the model.
     *
     * @return string
     */
    public function getKeyName()
    {
    }

    /**
     * Set the primary key for the model.
     *
     * @param string $key
     * @return $this
     */
    public function setKeyName(
        $key
    )
    {
    }

    /**
     * Get the table qualified key name.
     *
     * @return string
     */
    public function getQualifiedKeyName()
    {
    }

    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKey()
    {
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
    }

    /**
     * Determine if the model uses timestamps.
     *
     * @return bool
     */
    public function usesTimestamps()
    {
    }

    /**
     * Get the polymorphic relationship columns.
     *
     * @param string $name
     * @param string $type
     * @param string $id
     * @return array
     */
    protected function getMorphs(
        $name,
        $type,
        $id
    )
    {
    }

    /**
     * Get the class name for polymorphic relations.
     *
     * @return string
     */
    public function getMorphClass()
    {
    }

    /**
     * Get the number of models to return per page.
     *
     * @return int
     */
    public function getPerPage()
    {
    }

    /**
     * Set the number of models to return per page.
     *
     * @param int $perPage
     * @return $this
     */
    public function setPerPage(
        $perPage
    )
    {
    }

    /**
     * Get the default foreign key name for the model.
     *
     * @return string
     */
    public function getForeignKey()
    {
    }

    /**
     * Get the hidden attributes for the model.
     *
     * @return array
     */
    public function getHidden()
    {
    }

    /**
     * Set the hidden attributes for the model.
     *
     * @param array $hidden
     * @return $this
     */
    public function setHidden(
        $hidden
    )
    {
    }

    /**
     * Add hidden attributes for the model.
     *
     * @param array|string|null $attributes
     * @return void
     */
    public function addHidden(
        $attributes
    )
    {
    }

    /**
     * Make the given, typically hidden, attributes visible.
     *
     * @param array|string $attributes
     * @return $this
     */
    public function makeVisible(
        $attributes
    )
    {
    }

    /**
     * Make the given, typically hidden, attributes visible.
     *
     * @param array|string $attributes
     * @return $this
     *
     * @deprecated since version 5.2. Use the "makeVisible" method directly.
     */
    public function withHidden(
        $attributes
    )
    {
    }

    /**
     * Get the visible attributes for the model.
     *
     * @return array
     */
    public function getVisible()
    {
    }

    /**
     * Set the visible attributes for the model.
     *
     * @param array $visible
     * @return $this
     */
    public function setVisible(
        $visible
    )
    {
    }

    /**
     * Add visible attributes for the model.
     *
     * @param array|string|null $attributes
     * @return void
     */
    public function addVisible(
        $attributes
    )
    {
    }

    /**
     * Set the accessors to append to model arrays.
     *
     * @param array $appends
     * @return $this
     */
    public function setAppends(
        $appends
    )
    {
    }

    /**
     * Get the fillable attributes for the model.
     *
     * @return array
     */
    public function getFillable()
    {
    }

    /**
     * Set the fillable attributes for the model.
     *
     * @param array $fillable
     * @return $this
     */
    public function fillable(
        $fillable
    )
    {
    }

    /**
     * Get the guarded attributes for the model.
     *
     * @return array
     */
    public function getGuarded()
    {
    }

    /**
     * Set the guarded attributes for the model.
     *
     * @param array $guarded
     * @return $this
     */
    public function guard(
        $guarded
    )
    {
    }

    /**
     * Disable all mass assignable restrictions.
     *
     * @param bool $state
     * @return void
     */
    public static function unguard(
        $state = "1"
    )
    {
    }

    /**
     * Enable the mass assignment restrictions.
     *
     * @return void
     */
    public static function reguard()
    {
    }

    /**
     * Determine if current state is "unguarded".
     *
     * @return bool
     */
    public static function isUnguarded()
    {
    }

    /**
     * Run the given callable while being unguarded.
     *
     * @param callable $callback
     * @return mixed
     */
    public static function unguarded(
        $callback
    )
    {
    }

    /**
     * Determine if the given attribute may be mass assigned.
     *
     * @param string $key
     * @return bool
     */
    public function isFillable(
        $key
    )
    {
    }

    /**
     * Determine if the given key is guarded.
     *
     * @param string $key
     * @return bool
     */
    public function isGuarded(
        $key
    )
    {
    }

    /**
     * Determine if the model is totally guarded.
     *
     * @return bool
     */
    public function totallyGuarded()
    {
    }

    /**
     * Remove the table name from a given key.
     *
     * @param string $key
     * @return string
     */
    protected function removeTableFromKey(
        $key
    )
    {
    }

    /**
     * Get the relationships that are touched on save.
     *
     * @return array
     */
    public function getTouchedRelations()
    {
    }

    /**
     * Set the relationships that are touched on save.
     *
     * @param array $touches
     * @return $this
     */
    public function setTouchedRelations(
        $touches
    )
    {
    }

    /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing()
    {
    }

    /**
     * Set whether IDs are incrementing.
     *
     * @param bool $value
     * @return $this
     */
    public function setIncrementing(
        $value
    )
    {
    }

    /**
     * Convert the model instance to JSON.
     *
     * @param int $options
     * @return string
     */
    public function toJson(
        $options
    )
    {
    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    public function jsonSerialize()
    {
    }

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
    }

    /**
     * Convert the model's attributes to an array.
     *
     * @return array
     */
    public function attributesToArray()
    {
    }

    /**
     * Get an attribute array of all arrayable attributes.
     *
     * @return array
     */
    protected function getArrayableAttributes()
    {
    }

    /**
     * Get all of the appendable values that are arrayable.
     *
     * @return array
     */
    protected function getArrayableAppends()
    {
    }

    /**
     * Get the model's relationships in array form.
     *
     * @return array
     */
    public function relationsToArray()
    {
    }

    /**
     * Get an attribute array of all arrayable relations.
     *
     * @return array
     */
    protected function getArrayableRelations()
    {
    }

    /**
     * Get an attribute array of all arrayable values.
     *
     * @param array $values
     * @return array
     */
    protected function getArrayableItems(
        $values
    )
    {
    }

    /**
     * Get a plain attribute (not a relationship).
     *
     * @param string $key
     * @return mixed
     */
    public function getAttributeValue(
        $key
    )
    {
    }

    /**
     * Get a relationship.
     *
     * @param string $key
     * @return mixed
     */
    public function getRelationValue(
        $key
    )
    {
    }

    /**
     * Get an attribute from the $attributes array.
     *
     * @param string $key
     * @return mixed
     */
    protected function getAttributeFromArray(
        $key
    )
    {
    }

    /**
     * Get a relationship value from a method.
     *
     * @param string $method
     * @return mixed
     *
     * @throws \LogicException
     */
    protected function getRelationshipFromMethod(
        $method
    )
    {
    }

    /**
     * Determine if a get mutator exists for an attribute.
     *
     * @param string $key
     * @return bool
     */
    public function hasGetMutator(
        $key
    )
    {
    }

    /**
     * Get the value of an attribute using its mutator.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function mutateAttribute(
        $key,
        $value
    )
    {
    }

    /**
     * Get the value of an attribute using its mutator for array conversion.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function mutateAttributeForArray(
        $key,
        $value
    )
    {
    }

    /**
     * Determine whether an attribute should be cast to a native type.
     *
     * @param string $key
     * @param array|string|null $types
     * @return bool
     */
    public function hasCast(
        $key,
        $types
    )
    {
    }

    /**
     * Get the casts array.
     *
     * @return array
     */
    public function getCasts()
    {
    }

    /**
     * Determine whether a value is Date / DateTime castable for inbound manipulation.
     *
     * @param string $key
     * @return bool
     */
    protected function isDateCastable(
        $key
    )
    {
    }

    /**
     * Determine whether a value is JSON castable for inbound manipulation.
     *
     * @param string $key
     * @return bool
     */
    protected function isJsonCastable(
        $key
    )
    {
    }

    /**
     * Get the type of cast for a model attribute.
     *
     * @param string $key
     * @return string
     */
    protected function getCastType(
        $key
    )
    {
    }

    /**
     * Cast an attribute to a native PHP type.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function castAttribute(
        $key,
        $value
    )
    {
    }

    /**
     * Determine if a set mutator exists for an attribute.
     *
     * @param string $key
     * @return bool
     */
    public function hasSetMutator(
        $key
    )
    {
    }

    /**
     * Get the attributes that should be converted to dates.
     *
     * @return array
     */
    public function getDates()
    {
    }

    /**
     * Return a timestamp as unix timestamp.
     *
     * @param mixed $value
     * @return int
     */
    protected function asTimeStamp(
        $value
    )
    {
    }

    /**
     * Get the format for database stored dates.
     *
     * @return string
     */
    protected function getDateFormat()
    {
    }

    /**
     * Set the date format used by the model.
     *
     * @param string $format
     * @return $this
     */
    public function setDateFormat(
        $format
    )
    {
    }

    /**
     * Encode the given value as JSON.
     *
     * @param mixed $value
     * @return string
     */
    protected function asJson(
        $value
    )
    {
    }

    /**
     * Decode the given JSON back into an array or object.
     *
     * @param string $value
     * @param bool $asObject
     * @return mixed
     */
    public function fromJson(
        $value,
        $asObject
    )
    {
    }

    /**
     * Clone the model into a new, non-existing instance.
     *
     * @param array|null $except
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function replicate(
        $except
    )
    {
    }

    /**
     * Get all of the current attributes on the model.
     *
     * @return array
     */
    public function getAttributes()
    {
    }

    /**
     * Set the array of model attributes. No checking is done.
     *
     * @param array $attributes
     * @param bool $sync
     * @return $this
     */
    public function setRawAttributes(
        $attributes,
        $sync
    )
    {
    }

    /**
     * Get the model's original attribute values.
     *
     * @param string|null $key
     * @param mixed $default
     * @return mixed|array
     */
    public function getOriginal(
        $key,
        $default
    )
    {
    }

    /**
     * Sync the original attributes with the current.
     *
     * @return $this
     */
    public function syncOriginal()
    {
    }

    /**
     * Sync a single original attribute with its current value.
     *
     * @param string $attribute
     * @return $this
     */
    public function syncOriginalAttribute(
        $attribute
    )
    {
    }

    /**
     * Determine if the model or given attribute(s) have been modified.
     *
     * @param array|string|null $attributes
     * @return bool
     */
    public function isDirty(
        $attributes
    )
    {
    }

    /**
     * Get the attributes that have been changed since last sync.
     *
     * @return array
     */
    public function getDirty()
    {
    }

    /**
     * Determine if the new and old values for a given key are numerically equivalent.
     *
     * @param string $key
     * @return bool
     */
    protected function originalIsNumericallyEquivalent(
        $key
    )
    {
    }

    /**
     * Get all the loaded relations for the instance.
     *
     * @return array
     */
    public function getRelations()
    {
    }

    /**
     * Get a specified relationship.
     *
     * @param string $relation
     * @return mixed
     */
    public function getRelation(
        $relation
    )
    {
    }

    /**
     * Determine if the given relation is loaded.
     *
     * @param string $key
     * @return bool
     */
    public function relationLoaded(
        $key
    )
    {
    }

    /**
     * Set the specific relationship in the model.
     *
     * @param string $relation
     * @param mixed $value
     * @return $this
     */
    public function setRelation(
        $relation,
        $value
    )
    {
    }

    /**
     * Set the entire relations array on the model.
     *
     * @param array $relations
     * @return $this
     */
    public function setRelations(
        $relations
    )
    {
    }

    /**
     * Get the database connection for the model.
     *
     * @return \Illuminate\Database\Connection
     */
    public function getConnection()
    {
    }

    /**
     * Get the current connection name for the model.
     *
     * @return string
     */
    public function getConnectionName()
    {
    }

    /**
     * Set the connection associated with the model.
     *
     * @param string $name
     * @return $this
     */
    public function setConnection(
        $name
    )
    {
    }

    /**
     * Resolve a connection instance.
     *
     * @param string|null $connection
     * @return \Illuminate\Database\Connection
     */
    public static function resolveConnection(
        $connection
    )
    {
    }

    /**
     * Get the connection resolver instance.
     *
     * @return \Illuminate\Database\ConnectionResolverInterface
     */
    public static function getConnectionResolver()
    {
    }

    /**
     * Set the connection resolver instance.
     *
     * @param \Illuminate\Database\ConnectionResolverInterface $resolver
     * @return void
     */
    public static function setConnectionResolver(
        $resolver
    )
    {
    }

    /**
     * Unset the connection resolver for models.
     *
     * @return void
     */
    public static function unsetConnectionResolver()
    {
    }

    /**
     * Get the event dispatcher instance.
     *
     * @return \Illuminate\Contracts\Events\Dispatcher
     */
    public static function getEventDispatcher()
    {
    }

    /**
     * Set the event dispatcher instance.
     *
     * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
     * @return void
     */
    public static function setEventDispatcher(
        $dispatcher
    )
    {
    }

    /**
     * Unset the event dispatcher for models.
     *
     * @return void
     */
    public static function unsetEventDispatcher()
    {
    }

    /**
     * Get the mutated attributes for a given instance.
     *
     * @return array
     */
    public function getMutatedAttributes()
    {
    }

    /**
     * Extract and cache all the mutated attributes of a class.
     *
     * @param string $class
     * @return void
     */
    public static function cacheMutatedAttributes(
        $class
    )
    {
    }

    /**
     * Dynamically retrieve attributes on the model.
     *
     * @param string $key
     * @return mixed
     */
    public function __get(
        $key
    )
    {
    }

    /**
     * Dynamically set attributes on the model.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function __set(
        $key,
        $value
    )
    {
    }

    /**
     * Determine if the given attribute exists.
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists(
        $offset
    )
    {
    }

    /**
     * Get the value for a given offset.
     *
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet(
        $offset
    )
    {
    }

    /**
     * Set the value for a given offset.
     *
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet(
        $offset,
        $value
    )
    {
    }

    /**
     * Unset the value for a given offset.
     *
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset(
        $offset
    )
    {
    }

    /**
     * Determine if an attribute or relation exists on the model.
     *
     * @param string $key
     * @return bool
     */
    public function __isset(
        $key
    )
    {
    }

    /**
     * Unset an attribute on the model.
     *
     * @param string $key
     * @return void
     */
    public function __unset(
        $key
    )
    {
    }

    /**
     * Handle dynamic method calls into the model.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function __call(
        $method,
        $parameters
    )
    {
    }

    /**
     * Handle dynamic static method calls into the method.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public static function __callStatic(
        $method,
        $parameters
    )
    {
    }

    /**
     * Convert the model to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
    }

    /**
     * When a model is being unserialized, check if it needs to be booted.
     *
     * @return void
     */
    public function __wakeup()
    {
    }
}

namespace WHMCS\Config;
class Setting
{

    public $incrementing = "";

    protected $table = "";

    protected $primaryKey = "";

    public $unique = "";

    public $guardedForUpdate = "";

    protected $fillable = "";

    protected $booleanValues = "";

    protected $nonEmptyValues = "";

    protected $commaSeparatedValues = "";

    protected static $defaultKeyValuePairs = "";

    protected $semanticVersionValues = "";

    protected $characterSeparatedValues = "";

    protected $columnMap = "";

    protected $booleans = "";

    protected $strings = "";

    protected $ints = "";

    protected $semanticVersions = "";

    protected $commaSeparated = "";

    protected $characterSeparated = "";

    protected static $tableColumnCache = "";

    protected $rules = "";

    protected $errors = "";

    protected $customValidationMessages = "";
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = "";
    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = "";
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = "";
    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = "";
    /**
     * The model attribute's original state.
     *
     * @var array
     */
    protected $original = "";
    /**
     * The loaded relationships for the model.
     *
     * @var array
     */
    protected $relations = "";
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = "";
    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = "";
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = "";
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = "";
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = "";
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = "";
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = "";
    /**
     * The relationships that should be touched on save.
     *
     * @var array
     */
    protected $touches = "";
    /**
     * User exposed observable events.
     *
     * @var array
     */
    protected $observables = "";
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = "";
    /**
     * The class name to be used in polymorphic relations.
     *
     * @var string
     */
    protected $morphClass = "";
    /**
     * Indicates if the model exists.
     *
     * @var bool
     */
    public $exists = "";
    /**
     * Indicates if the model was inserted during the current request lifecycle.
     *
     * @var bool
     */
    public $wasRecentlyCreated = "";
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @var bool
     */
    public static $snakeAttributes;
    /**
     * The connection resolver instance.
     *
     * @var \Illuminate\Database\ConnectionResolverInterface
     */
    protected static $resolver = "";
    /**
     * The event dispatcher instance.
     *
     * @var \Illuminate\Contracts\Events\Dispatcher
     */
    protected static $dispatcher = "";
    /**
     * The array of booted models.
     *
     * @var array
     */
    protected static $booted = "";
    /**
     * The array of global scopes on the model.
     *
     * @var array
     */
    protected static $globalScopes = "";
    /**
     * Indicates if all mass assignment is enabled.
     *
     * @var bool
     */
    protected static $unguarded = "";
    /**
     * The cache of the mutated attributes for each class.
     *
     * @var array
     */
    protected static $mutatorCache = "";
    /**
     * The many to many relationship methods.
     *
     * @var array
     */
    public static $manyMethods;

    public static function boot()
    {
    }

    public static function allDefaults()
    {
    }

    public function scopeUpdater(
        $query
    )
    {
    }

    public static function getValue(
        $setting
    )
    {
    }

    public static function setValue(
        $key,
        $value
    )
    {
    }

    public static function deleteValue(
        $key
    )
    {
    }

    public static function allAsArray()
    {
    }

    public function getBooleanValues()
    {
    }

    public function getCommaSeparatedValues()
    {
    }

    public function newCollection(
        $models
    )
    {
    }

    public function __construct(
        $attributes
    )
    {
    }

    public function setAttribute(
        $key,
        $value
    )
    {
    }

    public function getAttribute(
        $key
    )
    {
    }

    public function isCommaSeparatedValue()
    {
    }

    public function clearColumnCache()
    {
    }

    protected function hasColumn(
        $column
    )
    {
    }

    public function isAttributeSet(
        $key
    )
    {
    }

    public function getRawAttribute(
        $key,
        $default
    )
    {
    }

    public function fromBoolean(
        $value
    )
    {
    }

    public function fromString(
        $value
    )
    {
    }

    public function fromInt(
        $value
    )
    {
    }

    public function asBoolean(
        $value
    )
    {
    }

    public function asArrayFromCharacterSeparatedValue(
        $data,
        $character
    )
    {
    }

    public function fromArrayToCharacterSeparatedValue(
        $list,
        $character
    )
    {
    }

    public function fromSemanticVersion(
        $version
    )
    {
    }

    public function asSemanticVersion(
        $version
    )
    {
    }

    public static function convertBoolean(
        $value
    )
    {
    }

    public static function convertBooleanColumn(
        $column
    )
    {
    }

    public static function convertUnixTimestampIntegerToTimestampColumn(
        $column
    )
    {
    }

    protected function isBooleanColumn(
        $column
    )
    {
    }

    protected function isSemanticVersionColumn(
        $column
    )
    {
    }

    protected function isCommaSeparatedColumn(
        $column
    )
    {
    }

    protected function decryptValue(
        $cipherText,
        $key
    )
    {
    }

    protected function encryptValue(
        $text,
        $key
    )
    {
    }

    protected function aesEncryptValue(
        $text,
        $key
    )
    {
    }

    protected function aesDecryptValue(
        $text,
        $key
    )
    {
    }

    protected function serializeDate(
        $date
    )
    {
    }

    protected function decrypt(
        $value
    )
    {
    }

    protected function encrypt(
        $value
    )
    {
    }

    protected function asDateTime(
        $value
    )
    {
    }

    public function fromDateTime(
        $value
    )
    {
    }

    public function toArrayUsingColumnMapNames()
    {
    }

    public function validate()
    {
    }

    public function setCustomValidationMessages(
        $messages
    )
    {
    }

    public function errors()
    {
    }

    public function getCustomFieldValuesAttribute()
    {
    }

    protected function getCustomFieldType()
    {
    }

    protected function getCustomFieldRelId()
    {
    }

    /**
     * Check if the model needs to be booted and if so, do it.
     *
     * @return void
     */
    protected function bootIfNotBooted()
    {
    }

    /**
     * Boot all of the bootable traits on the model.
     *
     * @return void
     */
    protected static function bootTraits()
    {
    }

    /**
     * Clear the list of booted models so they will be re-booted.
     *
     * @return void
     */
    public static function clearBootedModels()
    {
    }

    /**
     * Register a new global scope on the model.
     *
     * @param \Illuminate\Database\Eloquent\Scope|\Closure|string $scope
     * @param \Closure|null $implementation
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public static function addGlobalScope(
        $scope,
        $implementation
    )
    {
    }

    /**
     * Determine if a model has a global scope.
     *
     * @param \Illuminate\Database\Eloquent\Scope|string $scope
     * @return bool
     */
    public static function hasGlobalScope(
        $scope
    )
    {
    }

    /**
     * Get a global scope registered with the model.
     *
     * @param \Illuminate\Database\Eloquent\Scope|string $scope
     * @return \Illuminate\Database\Eloquent\Scope|\Closure|null
     */
    public static function getGlobalScope(
        $scope
    )
    {
    }

    /**
     * Get the global scopes for this class instance.
     *
     * @return array
     */
    public function getGlobalScopes()
    {
    }

    /**
     * Register an observer with the Model.
     *
     * @param object|string $class
     * @param int $priority
     * @return void
     */
    public static function observe(
        $class,
        $priority
    )
    {
    }

    /**
     * Fill the model with an array of attributes.
     *
     * @param array $attributes
     * @return $this
     *
     * @throws \Illuminate\Database\Eloquent\MassAssignmentException
     */
    public function fill(
        $attributes
    )
    {
    }

    /**
     * Fill the model with an array of attributes. Force mass assignment.
     *
     * @param array $attributes
     * @return $this
     */
    public function forceFill(
        $attributes
    )
    {
    }

    /**
     * Get the fillable attributes of a given array.
     *
     * @param array $attributes
     * @return array
     */
    protected function fillableFromArray(
        $attributes
    )
    {
    }

    /**
     * Create a new instance of the given model.
     *
     * @param array $attributes
     * @param bool $exists
     * @return static
     */
    public function newInstance(
        $attributes,
        $exists
    )
    {
    }

    /**
     * Create a new model instance that is existing.
     *
     * @param array $attributes
     * @param string|null $connection
     * @return static
     */
    public function newFromBuilder(
        $attributes,
        $connection
    )
    {
    }

    /**
     * Create a collection of models from plain arrays.
     *
     * @param array $items
     * @param string|null $connection
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function hydrate(
        $items,
        $connection
    )
    {
    }

    /**
     * Create a collection of models from a raw query.
     *
     * @param string $query
     * @param array $bindings
     * @param string|null $connection
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function hydrateRaw(
        $query,
        $bindings,
        $connection
    )
    {
    }

    /**
     * Save a new model and return the instance.
     *
     * @param array $attributes
     * @return static
     */
    public static function create(
        $attributes
    )
    {
    }

    /**
     * Save a new model and return the instance. Allow mass-assignment.
     *
     * @param array $attributes
     * @return static
     */
    public static function forceCreate(
        $attributes
    )
    {
    }

    /**
     * Begin querying the model.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function query()
    {
    }

    /**
     * Begin querying the model on a given connection.
     *
     * @param string|null $connection
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function on(
        $connection
    )
    {
    }

    /**
     * Begin querying the model on the write connection.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public static function onWriteConnection()
    {
    }

    /**
     * Get all of the models from the database.
     *
     * @param array|mixed $columns
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function all(
        $columns = "Array"
    )
    {
    }

    /**
     * Reload a fresh model instance from the database.
     *
     * @param array|string $with
     * @return $this|null
     */
    public function fresh(
        $with
    )
    {
    }

    /**
     * Eager load relations on the model.
     *
     * @param array|string $relations
     * @return $this
     */
    public function load(
        $relations
    )
    {
    }

    /**
     * Begin querying a model with eager loading.
     *
     * @param array|string $relations
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public static function with(
        $relations
    )
    {
    }

    /**
     * Append attributes to query when building a query.
     *
     * @param array|string $attributes
     * @return $this
     */
    public function append(
        $attributes
    )
    {
    }

    /**
     * Define a one-to-one relationship.
     *
     * @param string $related
     * @param string $foreignKey
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hasOne(
        $related,
        $foreignKey,
        $localKey
    )
    {
    }

    /**
     * Define a polymorphic one-to-one relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $type
     * @param string $id
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function morphOne(
        $related,
        $name,
        $type,
        $id,
        $localKey
    )
    {
    }

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @param string $related
     * @param string $foreignKey
     * @param string $otherKey
     * @param string $relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function belongsTo(
        $related,
        $foreignKey,
        $otherKey,
        $relation
    )
    {
    }

    /**
     * Define a polymorphic, inverse one-to-one or many relationship.
     *
     * @param string $name
     * @param string $type
     * @param string $id
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function morphTo(
        $name,
        $type,
        $id
    )
    {
    }

    /**
     * Retrieve the fully qualified class name from a slug.
     *
     * @param string $class
     * @return string
     */
    public function getActualClassNameForMorph(
        $class
    )
    {
    }

    /**
     * Define a one-to-many relationship.
     *
     * @param string $related
     * @param string $foreignKey
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hasMany(
        $related,
        $foreignKey,
        $localKey
    )
    {
    }

    /**
     * Define a has-many-through relationship.
     *
     * @param string $related
     * @param string $through
     * @param string|null $firstKey
     * @param string|null $secondKey
     * @param string|null $localKey
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function hasManyThrough(
        $related,
        $through,
        $firstKey,
        $secondKey,
        $localKey
    )
    {
    }

    /**
     * Define a polymorphic one-to-many relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $type
     * @param string $id
     * @param string $localKey
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function morphMany(
        $related,
        $name,
        $type,
        $id,
        $localKey
    )
    {
    }

    /**
     * Define a many-to-many relationship.
     *
     * @param string $related
     * @param string $table
     * @param string $foreignKey
     * @param string $otherKey
     * @param string $relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function belongsToMany(
        $related,
        $table,
        $foreignKey,
        $otherKey,
        $relation
    )
    {
    }

    /**
     * Define a polymorphic many-to-many relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $table
     * @param string $foreignKey
     * @param string $otherKey
     * @param bool $inverse
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function morphToMany(
        $related,
        $name,
        $table,
        $foreignKey,
        $otherKey,
        $inverse
    )
    {
    }

    /**
     * Define a polymorphic, inverse many-to-many relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $table
     * @param string $foreignKey
     * @param string $otherKey
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function morphedByMany(
        $related,
        $name,
        $table,
        $foreignKey,
        $otherKey
    )
    {
    }

    /**
     * Get the relationship name of the belongs to many.
     *
     * @return string
     */
    protected function getBelongsToManyCaller()
    {
    }

    /**
     * Get the joining table name for a many-to-many relation.
     *
     * @param string $related
     * @return string
     */
    public function joiningTable(
        $related
    )
    {
    }

    /**
     * Destroy the models for the given IDs.
     *
     * @param array|int $ids
     * @return int
     */
    public static function destroy(
        $ids
    )
    {
    }

    /**
     * Delete the model from the database.
     *
     * @return bool|null
     *
     * @throws \Exception
     */
    public function delete()
    {
    }

    /**
     * Force a hard delete on a soft deleted model.
     *
     * This method protects developers from running forceDelete when trait is missing.
     *
     * @return bool|null
     */
    public function forceDelete()
    {
    }

    /**
     * Perform the actual delete query on this model instance.
     *
     * @return void
     */
    protected function performDeleteOnModel()
    {
    }

    /**
     * Register a saving model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function saving(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a saved model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function saved(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register an updating model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function updating(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register an updated model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function updated(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a creating model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function creating(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a created model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function created(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a deleting model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function deleting(
        $callback,
        $priority
    )
    {
    }

    /**
     * Register a deleted model event with the dispatcher.
     *
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    public static function deleted(
        $callback,
        $priority
    )
    {
    }

    /**
     * Remove all of the event listeners for the model.
     *
     * @return void
     */
    public static function flushEventListeners()
    {
    }

    /**
     * Register a model event with the dispatcher.
     *
     * @param string $event
     * @param \Closure|string $callback
     * @param int $priority
     * @return void
     */
    protected static function registerModelEvent(
        $event,
        $callback,
        $priority
    )
    {
    }

    /**
     * Get the observable event names.
     *
     * @return array
     */
    public function getObservableEvents()
    {
    }

    /**
     * Set the observable event names.
     *
     * @param array $observables
     * @return $this
     */
    public function setObservableEvents(
        $observables
    )
    {
    }

    /**
     * Add an observable event name.
     *
     * @param array|mixed $observables
     * @return void
     */
    public function addObservableEvents(
        $observables
    )
    {
    }

    /**
     * Remove an observable event name.
     *
     * @param array|mixed $observables
     * @return void
     */
    public function removeObservableEvents(
        $observables
    )
    {
    }

    /**
     * Increment a column's value by a given amount.
     *
     * @param string $column
     * @param int $amount
     * @param array $extra
     * @return int
     */
    protected function increment(
        $column,
        $amount = "1",
        $extra
    )
    {
    }

    /**
     * Decrement a column's value by a given amount.
     *
     * @param string $column
     * @param int $amount
     * @param array $extra
     * @return int
     */
    protected function decrement(
        $column,
        $amount = "1",
        $extra
    )
    {
    }

    /**
     * Run the increment or decrement method on the model.
     *
     * @param string $column
     * @param int $amount
     * @param array $extra
     * @param string $method
     * @return int
     */
    protected function incrementOrDecrement(
        $column,
        $amount,
        $extra,
        $method
    )
    {
    }

    /**
     * Increment the underlying attribute value and sync with original.
     *
     * @param string $column
     * @param int $amount
     * @param string $method
     * @return void
     */
    protected function incrementOrDecrementAttributeValue(
        $column,
        $amount,
        $method
    )
    {
    }

    /**
     * Update the model in the database.
     *
     * @param array $attributes
     * @param array $options
     * @return bool|int
     */
    public function update(
        $attributes,
        $options
    )
    {
    }

    /**
     * Save the model and all of its relationships.
     *
     * @return bool
     */
    public function push()
    {
    }

    /**
     * Save the model to the database.
     *
     * @param array $options
     * @return bool
     */
    public function save(
        $options
    )
    {
    }

    /**
     * Save the model to the database using transaction.
     *
     * @param array $options
     * @return bool
     *
     * @throws \Throwable
     */
    public function saveOrFail(
        $options
    )
    {
    }

    /**
     * Finish processing on a successful save operation.
     *
     * @param array $options
     * @return void
     */
    protected function finishSave(
        $options
    )
    {
    }

    /**
     * Perform a model update operation.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $options
     * @return bool
     */
    protected function performUpdate(
        $query,
        $options
    )
    {
    }

    /**
     * Perform a model insert operation.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $options
     * @return bool
     */
    protected function performInsert(
        $query,
        $options
    )
    {
    }

    /**
     * Insert the given attributes and set the ID on the model.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $attributes
     * @return void
     */
    protected function insertAndSetId(
        $query,
        $attributes
    )
    {
    }

    /**
     * Touch the owning relations of the model.
     *
     * @return void
     */
    public function touchOwners()
    {
    }

    /**
     * Determine if the model touches a given relation.
     *
     * @param string $relation
     * @return bool
     */
    public function touches(
        $relation
    )
    {
    }

    /**
     * Fire the given event for the model.
     *
     * @param string $event
     * @param bool $halt
     * @return mixed
     */
    protected function fireModelEvent(
        $event,
        $halt = "1"
    )
    {
    }

    /**
     * Set the keys for a save update query.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function setKeysForSaveQuery(
        $query
    )
    {
    }

    /**
     * Get the primary key value for a save query.
     *
     * @return mixed
     */
    protected function getKeyForSaveQuery()
    {
    }

    /**
     * Update the model's update timestamp.
     *
     * @return bool
     */
    public function touch()
    {
    }

    /**
     * Update the creation and update timestamps.
     *
     * @return void
     */
    protected function updateTimestamps()
    {
    }

    /**
     * Set the value of the "created at" attribute.
     *
     * @param mixed $value
     * @return $this
     */
    public function setCreatedAt(
        $value
    )
    {
    }

    /**
     * Set the value of the "updated at" attribute.
     *
     * @param mixed $value
     * @return $this
     */
    public function setUpdatedAt(
        $value
    )
    {
    }

    /**
     * Get the name of the "created at" column.
     *
     * @return string
     */
    public function getCreatedAtColumn()
    {
    }

    /**
     * Get the name of the "updated at" column.
     *
     * @return string
     */
    public function getUpdatedAtColumn()
    {
    }

    /**
     * Get a fresh timestamp for the model.
     *
     * @return \Carbon\Carbon
     */
    public function freshTimestamp()
    {
    }

    /**
     * Get a fresh timestamp for the model.
     *
     * @return string
     */
    public function freshTimestampString()
    {
    }

    /**
     * Get a new query builder for the model's table.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQuery()
    {
    }

    /**
     * Get a new query instance without a given scope.
     *
     * @param \Illuminate\Database\Eloquent\Scope|string $scope
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function newQueryWithoutScope(
        $scope
    )
    {
    }

    /**
     * Get a new query builder that doesn't have any global scopes.
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newQueryWithoutScopes()
    {
    }

    /**
     * Create a new Eloquent query builder for the model.
     *
     * @param \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function newEloquentBuilder(
        $query
    )
    {
    }

    /**
     * Get a new query builder instance for the connection.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    protected function newBaseQueryBuilder()
    {
    }

    /**
     * Create a new pivot model instance.
     *
     * @param \Illuminate\Database\Eloquent\Model $parent
     * @param array $attributes
     * @param string $table
     * @param bool $exists
     * @return \Illuminate\Database\Eloquent\Relations\Pivot
     */
    public function newPivot(
        $parent,
        $attributes,
        $table,
        $exists
    )
    {
    }

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
    }

    /**
     * Set the table associated with the model.
     *
     * @param string $table
     * @return $this
     */
    public function setTable(
        $table
    )
    {
    }

    /**
     * Get the value of the model's primary key.
     *
     * @return mixed
     */
    public function getKey()
    {
    }

    /**
     * Get the queueable identity for the entity.
     *
     * @return mixed
     */
    public function getQueueableId()
    {
    }

    /**
     * Get the primary key for the model.
     *
     * @return string
     */
    public function getKeyName()
    {
    }

    /**
     * Set the primary key for the model.
     *
     * @param string $key
     * @return $this
     */
    public function setKeyName(
        $key
    )
    {
    }

    /**
     * Get the table qualified key name.
     *
     * @return string
     */
    public function getQualifiedKeyName()
    {
    }

    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKey()
    {
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
    }

    /**
     * Determine if the model uses timestamps.
     *
     * @return bool
     */
    public function usesTimestamps()
    {
    }

    /**
     * Get the polymorphic relationship columns.
     *
     * @param string $name
     * @param string $type
     * @param string $id
     * @return array
     */
    protected function getMorphs(
        $name,
        $type,
        $id
    )
    {
    }

    /**
     * Get the class name for polymorphic relations.
     *
     * @return string
     */
    public function getMorphClass()
    {
    }

    /**
     * Get the number of models to return per page.
     *
     * @return int
     */
    public function getPerPage()
    {
    }

    /**
     * Set the number of models to return per page.
     *
     * @param int $perPage
     * @return $this
     */
    public function setPerPage(
        $perPage
    )
    {
    }

    /**
     * Get the default foreign key name for the model.
     *
     * @return string
     */
    public function getForeignKey()
    {
    }

    /**
     * Get the hidden attributes for the model.
     *
     * @return array
     */
    public function getHidden()
    {
    }

    /**
     * Set the hidden attributes for the model.
     *
     * @param array $hidden
     * @return $this
     */
    public function setHidden(
        $hidden
    )
    {
    }

    /**
     * Add hidden attributes for the model.
     *
     * @param array|string|null $attributes
     * @return void
     */
    public function addHidden(
        $attributes
    )
    {
    }

    /**
     * Make the given, typically hidden, attributes visible.
     *
     * @param array|string $attributes
     * @return $this
     */
    public function makeVisible(
        $attributes
    )
    {
    }

    /**
     * Make the given, typically hidden, attributes visible.
     *
     * @param array|string $attributes
     * @return $this
     *
     * @deprecated since version 5.2. Use the "makeVisible" method directly.
     */
    public function withHidden(
        $attributes
    )
    {
    }

    /**
     * Get the visible attributes for the model.
     *
     * @return array
     */
    public function getVisible()
    {
    }

    /**
     * Set the visible attributes for the model.
     *
     * @param array $visible
     * @return $this
     */
    public function setVisible(
        $visible
    )
    {
    }

    /**
     * Add visible attributes for the model.
     *
     * @param array|string|null $attributes
     * @return void
     */
    public function addVisible(
        $attributes
    )
    {
    }

    /**
     * Set the accessors to append to model arrays.
     *
     * @param array $appends
     * @return $this
     */
    public function setAppends(
        $appends
    )
    {
    }

    /**
     * Get the fillable attributes for the model.
     *
     * @return array
     */
    public function getFillable()
    {
    }

    /**
     * Set the fillable attributes for the model.
     *
     * @param array $fillable
     * @return $this
     */
    public function fillable(
        $fillable
    )
    {
    }

    /**
     * Get the guarded attributes for the model.
     *
     * @return array
     */
    public function getGuarded()
    {
    }

    /**
     * Set the guarded attributes for the model.
     *
     * @param array $guarded
     * @return $this
     */
    public function guard(
        $guarded
    )
    {
    }

    /**
     * Disable all mass assignable restrictions.
     *
     * @param bool $state
     * @return void
     */
    public static function unguard(
        $state = "1"
    )
    {
    }

    /**
     * Enable the mass assignment restrictions.
     *
     * @return void
     */
    public static function reguard()
    {
    }

    /**
     * Determine if current state is "unguarded".
     *
     * @return bool
     */
    public static function isUnguarded()
    {
    }

    /**
     * Run the given callable while being unguarded.
     *
     * @param callable $callback
     * @return mixed
     */
    public static function unguarded(
        $callback
    )
    {
    }

    /**
     * Determine if the given attribute may be mass assigned.
     *
     * @param string $key
     * @return bool
     */
    public function isFillable(
        $key
    )
    {
    }

    /**
     * Determine if the given key is guarded.
     *
     * @param string $key
     * @return bool
     */
    public function isGuarded(
        $key
    )
    {
    }

    /**
     * Determine if the model is totally guarded.
     *
     * @return bool
     */
    public function totallyGuarded()
    {
    }

    /**
     * Remove the table name from a given key.
     *
     * @param string $key
     * @return string
     */
    protected function removeTableFromKey(
        $key
    )
    {
    }

    /**
     * Get the relationships that are touched on save.
     *
     * @return array
     */
    public function getTouchedRelations()
    {
    }

    /**
     * Set the relationships that are touched on save.
     *
     * @param array $touches
     * @return $this
     */
    public function setTouchedRelations(
        $touches
    )
    {
    }

    /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing()
    {
    }

    /**
     * Set whether IDs are incrementing.
     *
     * @param bool $value
     * @return $this
     */
    public function setIncrementing(
        $value
    )
    {
    }

    /**
     * Convert the model instance to JSON.
     *
     * @param int $options
     * @return string
     */
    public function toJson(
        $options
    )
    {
    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    public function jsonSerialize()
    {
    }

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
    }

    /**
     * Convert the model's attributes to an array.
     *
     * @return array
     */
    public function attributesToArray()
    {
    }

    /**
     * Get an attribute array of all arrayable attributes.
     *
     * @return array
     */
    protected function getArrayableAttributes()
    {
    }

    /**
     * Get all of the appendable values that are arrayable.
     *
     * @return array
     */
    protected function getArrayableAppends()
    {
    }

    /**
     * Get the model's relationships in array form.
     *
     * @return array
     */
    public function relationsToArray()
    {
    }

    /**
     * Get an attribute array of all arrayable relations.
     *
     * @return array
     */
    protected function getArrayableRelations()
    {
    }

    /**
     * Get an attribute array of all arrayable values.
     *
     * @param array $values
     * @return array
     */
    protected function getArrayableItems(
        $values
    )
    {
    }

    /**
     * Get a plain attribute (not a relationship).
     *
     * @param string $key
     * @return mixed
     */
    public function getAttributeValue(
        $key
    )
    {
    }

    /**
     * Get a relationship.
     *
     * @param string $key
     * @return mixed
     */
    public function getRelationValue(
        $key
    )
    {
    }

    /**
     * Get an attribute from the $attributes array.
     *
     * @param string $key
     * @return mixed
     */
    protected function getAttributeFromArray(
        $key
    )
    {
    }

    /**
     * Get a relationship value from a method.
     *
     * @param string $method
     * @return mixed
     *
     * @throws \LogicException
     */
    protected function getRelationshipFromMethod(
        $method
    )
    {
    }

    /**
     * Determine if a get mutator exists for an attribute.
     *
     * @param string $key
     * @return bool
     */
    public function hasGetMutator(
        $key
    )
    {
    }

    /**
     * Get the value of an attribute using its mutator.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function mutateAttribute(
        $key,
        $value
    )
    {
    }

    /**
     * Get the value of an attribute using its mutator for array conversion.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function mutateAttributeForArray(
        $key,
        $value
    )
    {
    }

    /**
     * Determine whether an attribute should be cast to a native type.
     *
     * @param string $key
     * @param array|string|null $types
     * @return bool
     */
    public function hasCast(
        $key,
        $types
    )
    {
    }

    /**
     * Get the casts array.
     *
     * @return array
     */
    public function getCasts()
    {
    }

    /**
     * Determine whether a value is Date / DateTime castable for inbound manipulation.
     *
     * @param string $key
     * @return bool
     */
    protected function isDateCastable(
        $key
    )
    {
    }

    /**
     * Determine whether a value is JSON castable for inbound manipulation.
     *
     * @param string $key
     * @return bool
     */
    protected function isJsonCastable(
        $key
    )
    {
    }

    /**
     * Get the type of cast for a model attribute.
     *
     * @param string $key
     * @return string
     */
    protected function getCastType(
        $key
    )
    {
    }

    /**
     * Cast an attribute to a native PHP type.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function castAttribute(
        $key,
        $value
    )
    {
    }

    /**
     * Determine if a set mutator exists for an attribute.
     *
     * @param string $key
     * @return bool
     */
    public function hasSetMutator(
        $key
    )
    {
    }

    /**
     * Get the attributes that should be converted to dates.
     *
     * @return array
     */
    public function getDates()
    {
    }

    /**
     * Return a timestamp as unix timestamp.
     *
     * @param mixed $value
     * @return int
     */
    protected function asTimeStamp(
        $value
    )
    {
    }

    /**
     * Get the format for database stored dates.
     *
     * @return string
     */
    protected function getDateFormat()
    {
    }

    /**
     * Set the date format used by the model.
     *
     * @param string $format
     * @return $this
     */
    public function setDateFormat(
        $format
    )
    {
    }

    /**
     * Encode the given value as JSON.
     *
     * @param mixed $value
     * @return string
     */
    protected function asJson(
        $value
    )
    {
    }

    /**
     * Decode the given JSON back into an array or object.
     *
     * @param string $value
     * @param bool $asObject
     * @return mixed
     */
    public function fromJson(
        $value,
        $asObject
    )
    {
    }

    /**
     * Clone the model into a new, non-existing instance.
     *
     * @param array|null $except
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function replicate(
        $except
    )
    {
    }

    /**
     * Get all of the current attributes on the model.
     *
     * @return array
     */
    public function getAttributes()
    {
    }

    /**
     * Set the array of model attributes. No checking is done.
     *
     * @param array $attributes
     * @param bool $sync
     * @return $this
     */
    public function setRawAttributes(
        $attributes,
        $sync
    )
    {
    }

    /**
     * Get the model's original attribute values.
     *
     * @param string|null $key
     * @param mixed $default
     * @return mixed|array
     */
    public function getOriginal(
        $key,
        $default
    )
    {
    }

    /**
     * Sync the original attributes with the current.
     *
     * @return $this
     */
    public function syncOriginal()
    {
    }

    /**
     * Sync a single original attribute with its current value.
     *
     * @param string $attribute
     * @return $this
     */
    public function syncOriginalAttribute(
        $attribute
    )
    {
    }

    /**
     * Determine if the model or given attribute(s) have been modified.
     *
     * @param array|string|null $attributes
     * @return bool
     */
    public function isDirty(
        $attributes
    )
    {
    }

    /**
     * Get the attributes that have been changed since last sync.
     *
     * @return array
     */
    public function getDirty()
    {
    }

    /**
     * Determine if the new and old values for a given key are numerically equivalent.
     *
     * @param string $key
     * @return bool
     */
    protected function originalIsNumericallyEquivalent(
        $key
    )
    {
    }

    /**
     * Get all the loaded relations for the instance.
     *
     * @return array
     */
    public function getRelations()
    {
    }

    /**
     * Get a specified relationship.
     *
     * @param string $relation
     * @return mixed
     */
    public function getRelation(
        $relation
    )
    {
    }

    /**
     * Determine if the given relation is loaded.
     *
     * @param string $key
     * @return bool
     */
    public function relationLoaded(
        $key
    )
    {
    }

    /**
     * Set the specific relationship in the model.
     *
     * @param string $relation
     * @param mixed $value
     * @return $this
     */
    public function setRelation(
        $relation,
        $value
    )
    {
    }

    /**
     * Set the entire relations array on the model.
     *
     * @param array $relations
     * @return $this
     */
    public function setRelations(
        $relations
    )
    {
    }

    /**
     * Get the database connection for the model.
     *
     * @return \Illuminate\Database\Connection
     */
    public function getConnection()
    {
    }

    /**
     * Get the current connection name for the model.
     *
     * @return string
     */
    public function getConnectionName()
    {
    }

    /**
     * Set the connection associated with the model.
     *
     * @param string $name
     * @return $this
     */
    public function setConnection(
        $name
    )
    {
    }

    /**
     * Resolve a connection instance.
     *
     * @param string|null $connection
     * @return \Illuminate\Database\Connection
     */
    public static function resolveConnection(
        $connection
    )
    {
    }

    /**
     * Get the connection resolver instance.
     *
     * @return \Illuminate\Database\ConnectionResolverInterface
     */
    public static function getConnectionResolver()
    {
    }

    /**
     * Set the connection resolver instance.
     *
     * @param \Illuminate\Database\ConnectionResolverInterface $resolver
     * @return void
     */
    public static function setConnectionResolver(
        $resolver
    )
    {
    }

    /**
     * Unset the connection resolver for models.
     *
     * @return void
     */
    public static function unsetConnectionResolver()
    {
    }

    /**
     * Get the event dispatcher instance.
     *
     * @return \Illuminate\Contracts\Events\Dispatcher
     */
    public static function getEventDispatcher()
    {
    }

    /**
     * Set the event dispatcher instance.
     *
     * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
     * @return void
     */
    public static function setEventDispatcher(
        $dispatcher
    )
    {
    }

    /**
     * Unset the event dispatcher for models.
     *
     * @return void
     */
    public static function unsetEventDispatcher()
    {
    }

    /**
     * Get the mutated attributes for a given instance.
     *
     * @return array
     */
    public function getMutatedAttributes()
    {
    }

    /**
     * Extract and cache all the mutated attributes of a class.
     *
     * @param string $class
     * @return void
     */
    public static function cacheMutatedAttributes(
        $class
    )
    {
    }

    /**
     * Dynamically retrieve attributes on the model.
     *
     * @param string $key
     * @return mixed
     */
    public function __get(
        $key
    )
    {
    }

    /**
     * Dynamically set attributes on the model.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function __set(
        $key,
        $value
    )
    {
    }

    /**
     * Determine if the given attribute exists.
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists(
        $offset
    )
    {
    }

    /**
     * Get the value for a given offset.
     *
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet(
        $offset
    )
    {
    }

    /**
     * Set the value for a given offset.
     *
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet(
        $offset,
        $value
    )
    {
    }

    /**
     * Unset the value for a given offset.
     *
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset(
        $offset
    )
    {
    }

    /**
     * Determine if an attribute or relation exists on the model.
     *
     * @param string $key
     * @return bool
     */
    public function __isset(
        $key
    )
    {
    }

    /**
     * Unset an attribute on the model.
     *
     * @param string $key
     * @return void
     */
    public function __unset(
        $key
    )
    {
    }

    /**
     * Handle dynamic method calls into the model.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function __call(
        $method,
        $parameters
    )
    {
    }

    /**
     * Handle dynamic static method calls into the method.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public static function __callStatic(
        $method,
        $parameters
    )
    {
    }

    /**
     * Convert the model to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
    }

    /**
     * When a model is being unserialized, check if it needs to be booted.
     *
     * @return void
     */
    public function __wakeup()
    {
    }
}

namespace WHMCS\Model;
class Observer
{

    public function creating(
        $model
    )
    {
    }

    public function updating(
        $model
    )
    {
    }

    protected function enforceUniqueConstraint(
        $model
    )
    {
    }

    protected function enforceGuardedForUpdateProperties(
        $model
    )
    {
    }
}

namespace WHMCS\Http;
class Request
{

    protected static $trustedProxies = "";

    protected static $trustedHostPatterns = "";

    protected static $trustedHosts = "";

    protected static $trustedHeaders = "";

    protected $headers = "";

    protected $server = "";

    public function __construct(
        $server
    )
    {
    }

    public static function setTrustedProxies(
        $proxies
    )
    {
    }

    public static function getTrustedProxies()
    {
    }

    public static function setTrustedHeaderName(
        $key,
        $value
    )
    {
    }

    public static function getTrustedHeaderName(
        $key
    )
    {
    }

    public function getClientIps()
    {
    }

    public function getClientIp()
    {
    }

    public static function defineProxyTrustFromApplication(
        $whmcs
    )
    {
    }
}

namespace WHMCS\Config;
class SettingCollection
{

    protected $prefix = "";

    protected $modelClassName = "";
    /**
     * The items contained in the collection.
     *
     * @var array
     */
    protected $items = "";
    /**
     * The registered string macros.
     *
     * @var array
     */
    protected static $macros = "";

    public function __construct(
        $models,
        $modelClassName,
        $prefix
    )
    {
    }

    public function __set(
        $key,
        $value
    )
    {
    }

    public function __get(
        $key
    )
    {
    }

    public function find(
        $key,
        $default
    )
    {
    }

    public function saveAll()
    {
    }

    public function baseModel()
    {
    }

    /**
     * Load a set of relationships onto the collection.
     *
     * @param mixed $relations
     * @return $this
     */
    public function load(
        $relations
    )
    {
    }

    /**
     * Add an item to the collection.
     *
     * @param mixed $item
     * @return $this
     */
    public function add(
        $item
    )
    {
    }

    /**
     * Determine if a key exists in the collection.
     *
     * @param mixed $key
     * @param mixed $value
     * @return bool
     */
    public function contains(
        $key,
        $value
    )
    {
    }

    /**
     * Get the array of primary keys.
     *
     * @return array
     */
    public function modelKeys()
    {
    }

    /**
     * Merge the collection with the given items.
     *
     * @param \ArrayAccess|array $items
     * @return static
     */
    public function merge(
        $items
    )
    {
    }

    /**
     * Diff the collection with the given items.
     *
     * @param \ArrayAccess|array $items
     * @return static
     */
    public function diff(
        $items
    )
    {
    }

    /**
     * Intersect the collection with the given items.
     *
     * @param \ArrayAccess|array $items
     * @return static
     */
    public function intersect(
        $items
    )
    {
    }

    /**
     * Return only unique items from the collection.
     *
     * @param string|callable|null $key
     * @return static
     */
    public function unique(
        $key
    )
    {
    }

    /**
     * Returns only the models from the collection with the specified keys.
     *
     * @param mixed $keys
     * @return static
     */
    public function only(
        $keys
    )
    {
    }

    /**
     * Returns all models in the collection except the models with specified keys.
     *
     * @param mixed $keys
     * @return static
     */
    public function except(
        $keys
    )
    {
    }

    /**
     * Make the given, typically visible, attributes hidden across the entire collection.
     *
     * @param array|string $attributes
     * @return $this
     */
    public function makeHidden(
        $attributes
    )
    {
    }

    /**
     * Make the given, typically hidden, attributes visible across the entire collection.
     *
     * @param array|string $attributes
     * @return $this
     */
    public function makeVisible(
        $attributes
    )
    {
    }

    /**
     * Make the given, typically hidden, attributes visible across the entire collection.
     *
     * @param array|string $attributes
     * @return $this
     *
     * @deprecated since version 5.2. Use the "makeVisible" method directly.
     */
    public function withHidden(
        $attributes
    )
    {
    }

    /**
     * Get a dictionary keyed by primary keys.
     *
     * @param \ArrayAccess|array|null $items
     * @return array
     */
    public function getDictionary(
        $items
    )
    {
    }

    /**
     * Get an array with the values of a given key.
     *
     * @param string $value
     * @param string|null $key
     * @return \Illuminate\Support\Collection
     */
    public function pluck(
        $value,
        $key
    )
    {
    }

    /**
     * Get the keys of the collection items.
     *
     * @return \Illuminate\Support\Collection
     */
    public function keys()
    {
    }

    /**
     * Zip the collection together with one or more arrays.
     *
     * @param mixed ...$items
     * @return \Illuminate\Support\Collection
     */
    public function zip(
        $items
    )
    {
    }

    /**
     * Collapse the collection of items into a single array.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collapse()
    {
    }

    /**
     * Get a flattened array of the items in the collection.
     *
     * @param int $depth
     * @return \Illuminate\Support\Collection
     */
    public function flatten(
        $depth = "INF"
    )
    {
    }

    /**
     * Flip the items in the collection.
     *
     * @return \Illuminate\Support\Collection
     */
    public function flip()
    {
    }

    /**
     * Get the type of the entities being queued.
     *
     * @return string|null
     */
    public function getQueueableClass()
    {
    }

    /**
     * Get the identifiers for all of the entities.
     *
     * @return array
     */
    public function getQueueableIds()
    {
    }

    /**
     * Get a base Support collection instance from this collection.
     *
     * @return \Illuminate\Support\Collection
     */
    public function toBase()
    {
    }

    /**
     * Create a new collection instance if the value isn't one already.
     *
     * @param mixed $items
     * @return static
     */
    public static function make(
        $items
    )
    {
    }

    /**
     * Get all of the items in the collection.
     *
     * @return array
     */
    public function all()
    {
    }

    /**
     * Get the average value of a given key.
     *
     * @param string|null $key
     * @return mixed
     */
    public function avg(
        $key
    )
    {
    }

    /**
     * Alias for the "avg" method.
     *
     * @param string|null $key
     * @return mixed
     */
    public function average(
        $key
    )
    {
    }

    /**
     * Get the items in the collection whose keys are not present in the given items.
     *
     * @param mixed $items
     * @return static
     */
    public function diffKeys(
        $items
    )
    {
    }

    /**
     * Execute a callback over each item.
     *
     * @param callable $callback
     * @return $this
     */
    public function each(
        $callback
    )
    {
    }

    /**
     * Create a new collection consisting of every n-th element.
     *
     * @param int $step
     * @param int $offset
     * @return static
     */
    public function every(
        $step,
        $offset
    )
    {
    }

    /**
     * Run a filter over each of the items.
     *
     * @param callable|null $callback
     * @return static
     */
    public function filter(
        $callback
    )
    {
    }

    /**
     * Filter items by the given key value pair.
     *
     * @param string $key
     * @param mixed $value
     * @param bool $strict
     * @return static
     */
    public function where(
        $key,
        $value,
        $strict
    )
    {
    }

    /**
     * Filter items by the given key value pair using loose comparison.
     *
     * @param string $key
     * @param mixed $value
     * @return static
     */
    public function whereLoose(
        $key,
        $value
    )
    {
    }

    /**
     * Filter items by the given key value pair.
     *
     * @param string $key
     * @param array $values
     * @param bool $strict
     * @return static
     */
    public function whereIn(
        $key,
        $values,
        $strict
    )
    {
    }

    /**
     * Filter items by the given key value pair using loose comparison.
     *
     * @param string $key
     * @param array $values
     * @return static
     */
    public function whereInLoose(
        $key,
        $values
    )
    {
    }

    /**
     * Get the first item from the collection.
     *
     * @param callable|null $callback
     * @param mixed $default
     * @return mixed
     */
    public function first(
        $callback,
        $default
    )
    {
    }

    /**
     * Remove an item from the collection by key.
     *
     * @param string|array $keys
     * @return $this
     */
    public function forget(
        $keys
    )
    {
    }

    /**
     * Get an item from the collection by key.
     *
     * @param mixed $key
     * @param mixed $default
     * @return mixed
     */
    public function get(
        $key,
        $default
    )
    {
    }

    /**
     * Group an associative array by a field or using a callback.
     *
     * @param callable|string $groupBy
     * @param bool $preserveKeys
     * @return static
     */
    public function groupBy(
        $groupBy,
        $preserveKeys
    )
    {
    }

    /**
     * Key an associative array by a field or using a callback.
     *
     * @param callable|string $keyBy
     * @return static
     */
    public function keyBy(
        $keyBy
    )
    {
    }

    /**
     * Determine if an item exists in the collection by key.
     *
     * @param mixed $key
     * @return bool
     */
    public function has(
        $key
    )
    {
    }

    /**
     * Concatenate values of a given key as a string.
     *
     * @param string $value
     * @param string $glue
     * @return string
     */
    public function implode(
        $value,
        $glue
    )
    {
    }

    /**
     * Determine if the collection is empty or not.
     *
     * @return bool
     */
    public function isEmpty()
    {
    }

    /**
     * Determine if the given value is callable, but not a string.
     *
     * @param mixed $value
     * @return bool
     */
    protected function useAsCallable(
        $value
    )
    {
    }

    /**
     * Get the last item from the collection.
     *
     * @param callable|null $callback
     * @param mixed $default
     * @return mixed
     */
    public function last(
        $callback,
        $default
    )
    {
    }

    /**
     * Alias for the "pluck" method.
     *
     * @param string $value
     * @param string|null $key
     * @return static
     *
     * @deprecated since version 5.2. Use the "pluck" method directly.
     */
    public function lists(
        $value,
        $key
    )
    {
    }

    /**
     * Run a map over each of the items.
     *
     * @param callable $callback
     * @return static
     */
    public function map(
        $callback
    )
    {
    }

    /**
     * Map a collection and flatten the result by a single level.
     *
     * @param callable $callback
     * @return static
     */
    public function flatMap(
        $callback
    )
    {
    }

    /**
     * Get the max value of a given key.
     *
     * @param string|null $key
     * @return mixed
     */
    public function max(
        $key
    )
    {
    }

    /**
     * Create a collection by using this collection for keys and another for its values.
     *
     * @param mixed $values
     * @return static
     */
    public function combine(
        $values
    )
    {
    }

    /**
     * Union the collection with the given items.
     *
     * @param mixed $items
     * @return static
     */
    public function union(
        $items
    )
    {
    }

    /**
     * Get the min value of a given key.
     *
     * @param string|null $key
     * @return mixed
     */
    public function min(
        $key
    )
    {
    }

    /**
     * "Paginate" the collection by slicing it into a smaller collection.
     *
     * @param int $page
     * @param int $perPage
     * @return static
     */
    public function forPage(
        $page,
        $perPage
    )
    {
    }

    /**
     * Get and remove the last item from the collection.
     *
     * @return mixed
     */
    public function pop()
    {
    }

    /**
     * Push an item onto the beginning of the collection.
     *
     * @param mixed $value
     * @param mixed $key
     * @return $this
     */
    public function prepend(
        $value,
        $key
    )
    {
    }

    /**
     * Push an item onto the end of the collection.
     *
     * @param mixed $value
     * @return $this
     */
    public function push(
        $value
    )
    {
    }

    /**
     * Get and remove an item from the collection.
     *
     * @param mixed $key
     * @param mixed $default
     * @return mixed
     */
    public function pull(
        $key,
        $default
    )
    {
    }

    /**
     * Put an item in the collection by key.
     *
     * @param mixed $key
     * @param mixed $value
     * @return $this
     */
    public function put(
        $key,
        $value
    )
    {
    }

    /**
     * Get one or more items randomly from the collection.
     *
     * @param int $amount
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public function random(
        $amount = "1"
    )
    {
    }

    /**
     * Reduce the collection to a single value.
     *
     * @param callable $callback
     * @param mixed $initial
     * @return mixed
     */
    public function reduce(
        $callback,
        $initial
    )
    {
    }

    /**
     * Create a collection of all elements that do not pass a given truth test.
     *
     * @param callable|mixed $callback
     * @return static
     */
    public function reject(
        $callback
    )
    {
    }

    /**
     * Reverse items order.
     *
     * @return static
     */
    public function reverse()
    {
    }

    /**
     * Search the collection for a given value and return the corresponding key if successful.
     *
     * @param mixed $value
     * @param bool $strict
     * @return mixed
     */
    public function search(
        $value,
        $strict
    )
    {
    }

    /**
     * Get and remove the first item from the collection.
     *
     * @return mixed
     */
    public function shift()
    {
    }

    /**
     * Shuffle the items in the collection.
     *
     * @return static
     */
    public function shuffle()
    {
    }

    /**
     * Slice the underlying collection array.
     *
     * @param int $offset
     * @param int $length
     * @return static
     */
    public function slice(
        $offset,
        $length
    )
    {
    }

    /**
     * Chunk the underlying collection array.
     *
     * @param int $size
     * @return static
     */
    public function chunk(
        $size
    )
    {
    }

    /**
     * Sort through each item with a callback.
     *
     * @param callable|null $callback
     * @return static
     */
    public function sort(
        $callback
    )
    {
    }

    /**
     * Sort the collection using the given callback.
     *
     * @param callable|string $callback
     * @param int $options
     * @param bool $descending
     * @return static
     */
    public function sortBy(
        $callback,
        $options,
        $descending
    )
    {
    }

    /**
     * Sort the collection in descending order using the given callback.
     *
     * @param callable|string $callback
     * @param int $options
     * @return static
     */
    public function sortByDesc(
        $callback,
        $options
    )
    {
    }

    /**
     * Splice a portion of the underlying collection array.
     *
     * @param int $offset
     * @param int|null $length
     * @param mixed $replacement
     * @return static
     */
    public function splice(
        $offset,
        $length,
        $replacement
    )
    {
    }

    /**
     * Get the sum of the given values.
     *
     * @param callable|string|null $callback
     * @return mixed
     */
    public function sum(
        $callback
    )
    {
    }

    /**
     * Take the first or last {$limit} items.
     *
     * @param int $limit
     * @return static
     */
    public function take(
        $limit
    )
    {
    }

    /**
     * Transform each item in the collection using a callback.
     *
     * @param callable $callback
     * @return $this
     */
    public function transform(
        $callback
    )
    {
    }

    /**
     * Reset the keys on the underlying array.
     *
     * @return static
     */
    public function values()
    {
    }

    /**
     * Get a value retrieving callback.
     *
     * @param string $value
     * @return callable
     */
    protected function valueRetriever(
        $value
    )
    {
    }

    /**
     * Get the collection of items as a plain array.
     *
     * @return array
     */
    public function toArray()
    {
    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    public function jsonSerialize()
    {
    }

    /**
     * Get the collection of items as JSON.
     *
     * @param int $options
     * @return string
     */
    public function toJson(
        $options
    )
    {
    }

    /**
     * Get an iterator for the items.
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
    }

    /**
     * Get a CachingIterator instance.
     *
     * @param int $flags
     * @return \CachingIterator
     */
    public function getCachingIterator(
        $flags = "1"
    )
    {
    }

    /**
     * Count the number of items in the collection.
     *
     * @return int
     */
    public function count()
    {
    }

    /**
     * Determine if an item exists at an offset.
     *
     * @param mixed $key
     * @return bool
     */
    public function offsetExists(
        $key
    )
    {
    }

    /**
     * Get an item at a given offset.
     *
     * @param mixed $key
     * @return mixed
     */
    public function offsetGet(
        $key
    )
    {
    }

    /**
     * Set the item at a given offset.
     *
     * @param mixed $key
     * @param mixed $value
     * @return void
     */
    public function offsetSet(
        $key,
        $value
    )
    {
    }

    /**
     * Unset the item at a given offset.
     *
     * @param string $key
     * @return void
     */
    public function offsetUnset(
        $key
    )
    {
    }

    /**
     * Convert the collection to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
    }

    /**
     * Results array of items from Collection or Arrayable.
     *
     * @param mixed $items
     * @return array
     */
    protected function getArrayableItems(
        $items
    )
    {
    }

    /**
     * Register a custom macro.
     *
     * @param string $name
     * @param callable $macro
     * @return void
     */
    public static function macro(
        $name,
        $macro
    )
    {
    }

    /**
     * Checks if macro is registered.
     *
     * @param string $name
     * @return bool
     */
    public static function hasMacro(
        $name
    )
    {
    }

    /**
     * Dynamically handle calls to the class.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public static function __callStatic(
        $method,
        $parameters
    )
    {
    }

    /**
     * Dynamically handle calls to the class.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call(
        $method,
        $parameters
    )
    {
    }
}

namespace WHMCS\Utility\Environment;
class CurrentUser
{

    public static function getIP()
    {
    }

    public static function getForwardedIpWithoutTrust()
    {
    }

    public static function getIPHost()
    {
    }

    public static function isIpv4AndPublic(
        $ip
    )
    {
    }
}

namespace WHMCS\Database;
class MysqlCompat
{

    public static $emulated;

    public static $notSupported;

    protected $lastStatement = "";

    protected $lastPDOException = "";

    protected $pdo = "";

    public function __construct(
        $pdo
    )
    {
    }

    public function getLastStatement()
    {
    }

    public function setLastStatement(
        $lastStatement
    )
    {
    }

    public function getPdo()
    {
    }

    public function setPdo(
        $pdo
    )
    {
    }

    public function isExecuteQuery(
        $query
    )
    {
    }

    public function mysqlAffectedRows()
    {
    }

    public function mysqlQuery(
        $query,
        $pdo
    )
    {
    }

    public function mysqlError()
    {
    }

    public function mysqlFetchArray(
        $statement
    )
    {
    }

    public function mysqlFetchAssoc(
        $statement
    )
    {
    }

    public function mysqlFetchObject(
        $statement
    )
    {
    }

    public function mysqlFetchRow(
        $statement
    )
    {
    }

    public function mysqlGetClientInfo(
        $pdo
    )
    {
    }

    public function mysqlGetServerInfo(
        $pdo
    )
    {
    }

    public function mysqlInsertId()
    {
    }

    public function mysqlNumFields(
        $statement
    )
    {
    }

    public function mysqlNumRows(
        $statement
    )
    {
    }

    public function mysqlRealEscapeString(
        $data
    )
    {
    }
}

namespace WHMCS;
class Session
{

    private $last_session_data = "";

    public static function getSessionServiceProviderClass(
        $appConfig
    )
    {
    }

    public static function initializeHandler(
        $appConfig
    )
    {
    }

    protected function startSession()
    {
    }

    public static function start()
    {
    }

    protected function getSessionName(
        $instanceid
    )
    {
    }

    public function create(
        $instanceid
    )
    {
    }

    public static function get(
        $key
    )
    {
    }

    public static function set(
        $key,
        $value
    )
    {
    }

    public static function delete(
        $key
    )
    {
    }

    public static function getAndDelete(
        $key
    )
    {
    }

    public static function rotate()
    {
    }

    public static function destroy()
    {
    }

    public function nullify()
    {
    }

    public function restore()
    {
    }

    public static function release()
    {
    }

    public static function setAndRelease(
        $key,
        $value
    )
    {
    }

    public static function exists(
        $key
    )
    {
    }
}

namespace WHMCS;
class TokenManager
{

    protected $namespaceSettings = "";

    protected $defaultNamespaceValue = "";

    public static function init(
        $whmcs
    )
    {
    }

    public function __construct()
    {
    }

    public function getToken()
    {
    }

    public function setToken(
        $token
    )
    {
    }

    public function conditionallySetToken()
    {
    }

    public function generateToken(
        $type
    )
    {
    }

    public function checkToken(
        $namespace,
        $token
    )
    {
    }

    public function handleInvalidToken()
    {
    }

    public function isValidToken(
        $token
    )
    {
    }

    public function getDefaultNamespaceSettings()
    {
    }

    public function getStoredNamespaceSettings(
        $whmcs
    )
    {
    }

    public function setStoredNamespaceSettings(
        $whmcs,
        $namespace_settings
    )
    {
    }

    public function getNamespaceSettings()
    {
    }

    public function setNamespaceSettings(
        $namespace_settings
    )
    {
    }

    public function getNamespaceValue(
        $namespace
    )
    {
    }

    public function generateAdminConfigurationHTMLRows(
        $aInt
    )
    {
    }

    protected function htmlRow(
        $aInt,
        $key,
        $value,
        $whmcs_default,
        $show
    )
    {
    }

    public function processAdminHTMLSave(
        $whmcs
    )
    {
    }

    protected function processOneNamespaceRequest(
        $whmcs,
        $key
    )
    {
    }
}

namespace WHMCS\View;
class Template
{

    protected static $setting = "";

    protected static $allTemplates = "";

    protected static $defaultTemplate = "";

    protected static $templateDirectory = "";

    protected static $ignoredTemplateDirectories = "";

    protected $name = "";

    protected $config = "";

    public function __construct(
        $name,
        $config
    )
    {
    }

    public static function factory(
        $systemTemplateName,
        $sessionTemplateName,
        $requestTemplateName
    )
    {
    }

    public static function find(
        $name
    )
    {
    }

    public static function all()
    {
    }

    public static function getDefault()
    {
    }

    public function getName()
    {
    }

    public function getDisplayName()
    {
    }

    public function getConfig()
    {
    }

    public function isDefault()
    {
    }
}

namespace WHMCS;
class File
{

    protected $path = "";

    public function __construct(
        $path
    )
    {
    }

    public function exists()
    {
    }

    public function create(
        $contents
    )
    {
    }

    public function delete()
    {
    }

    public function isFileNameSafe(
        $filename
    )
    {
    }

    public function contents()
    {
    }

    public function getExtension()
    {
    }
}

namespace WHMCS\Environment;
class OperatingSystem
{

    public static function isWindows(
        $phpOs
    )
    {
    }

    public function isOwnedByMe(
        $path
    )
    {
    }
}

namespace WHMCS\Input;
class Validation
{

    public function escapeshellcmd(
        $string
    )
    {
    }

    public function mismatchedQuotePosition(
        $string,
        $quoteCharacter
    )
    {
    }
}

namespace WHMCS\Environment;
class Php
{

    protected static $myUid = "";

    protected static $versionSupport = "";

    public static function functionEnabled(
        $function
    )
    {
    }

    public static function getIniSetting(
        $setting
    )
    {
    }

    public static function isIniSettingEnabled(
        $setting
    )
    {
    }

    public static function isFunctionAvailable(
        $function
    )
    {
    }

    public static function isModuleActive(
        $module
    )
    {
    }

    public static function isCli()
    {
    }

    public static function getUserRunningPhp()
    {
    }

    public static function hasValidTimezone()
    {
    }

    public static function hasExtension(
        $extension
    )
    {
    }

    public static function isSessionAutoStartEnabled()
    {
    }

    public static function isSessionSavePathWritable()
    {
    }

    public static function isSupportedByWhmcs(
        $version
    )
    {
    }

    public static function hasActivePhpSupport(
        $majorMinor
    )
    {
    }

    public static function hasSecurityPhpSupport(
        $majorMinor
    )
    {
    }

    public static function convertMemoryLimitToBytes(
        $memoryLimit
    )
    {
    }

    public static function getPhpMemoryLimitInBytes()
    {
    }

    public static function hasErrorLevelEnabled(
        $errorLevels,
        $checkLevel
    )
    {
    }

    public static function getVersion()
    {
    }

    public static function getLoadedExtensions()
    {
    }

    public static function getPreferredCliBinary()
    {
    }
}

namespace WHMCS\Config;
class Template
{

    protected $configFile = "";

    protected $name = "";

    protected $metaData = "";

    protected $properties = "";

    protected $configDefinitions = "";

    protected $config = "";

    public function __construct(
        $configFile
    )
    {
    }

    public function save(
        $saveTo
    )
    {
    }

    public function saveTo(
        $path
    )
    {
    }

    public function getProperties()
    {
    }

    public function setProperty(
        $key,
        $value
    )
    {
    }

    public function getConfigDefinitions()
    {
    }

    public function getConfig()
    {
    }

    public function setConfig(
        $key,
        $value
    )
    {
    }
}

namespace WHMCS\Security;
class Environment
{

    public static function setHttpProxyHeader(
        $userConfiguredProxy
    )
    {
    }
}

namespace WHMCS;
class Auth
{

    private $inputusername = "";

    private $admindata = "";

    private $logincookie = "";

    private $hasPasswordHashField = "";

    private function getInfo(
        $where,
        $resource,
        $restrictToEnabled
    )
    {
    }

    public function getInfobyID(
        $adminid,
        $resource,
        $restrictToEnabled
    )
    {
    }

    public function getInfobyUsername(
        $username,
        $restrictToEnabled
    )
    {
    }

    public function comparePasswordInputWithHook(
        $userInput,
        $isApi
    )
    {
    }

    public function comparePassword(
        $password
    )
    {
    }

    public function compareApiPassword(
        $password
    )
    {
    }

    public function isTwoFactor()
    {
    }

    public function getAdminID()
    {
    }

    public function getAdminRoleId()
    {
    }

    public function getAdminUsername()
    {
    }

    public function getAdminEmail()
    {
    }

    public function getLegacyAdminPW()
    {
    }

    public function getAdminPWHash()
    {
    }

    public function isAdminPWHashSet()
    {
    }

    public function generateNewPasswordHashAndStore(
        $password
    )
    {
    }

    public function generateNewPasswordHashAndStoreForApi(
        $password
    )
    {
    }

    public function getAdminTemplate()
    {
    }

    public function getAdminLanguage()
    {
    }

    public function getAdmin2FAModule()
    {
    }

    private function getAdminUserAgent()
    {
    }

    public function isActive()
    {
    }

    public function generateAdminSessionHash(
        $whmcsclass
    )
    {
    }

    public function setSessionVars(
        $whmcsclass
    )
    {
    }

    public function processLogin(
        $createAdminLogEntry
    )
    {
    }

    public function getRememberMeCookie()
    {
    }

    public function isValidRememberMeCookie(
        $whmcsclass
    )
    {
    }

    public function setRememberMeCookie()
    {
    }

    public function unsetRememberMeCookie()
    {
    }

    private function getWhiteListedIPs()
    {
    }

    private function isWhitelistedIP(
        $ip
    )
    {
    }

    private function isBanEnabled()
    {
    }

    private function getLoginBanDate()
    {
    }

    protected function sendWhitelistedIPNotice()
    {
    }

    public function failedLogin()
    {
    }

    public static function getID()
    {
    }

    public static function isLoggedIn()
    {
    }

    public function logout()
    {
    }

    public function isSessionPWHashValid(
        $whmcsclass
    )
    {
    }

    public function updateAdminLog()
    {
    }

    public function destroySession()
    {
    }

    public static function persistAdminSession()
    {
    }

    public static function persistClientSession()
    {
    }

    public function authenticateClientFromToken(
        $token
    )
    {
    }

    public function cleanRedirectUri(
        $uri,
        $forceRelativeRedirects
    )
    {
    }

    public function redirectToLogin()
    {
    }

    public function routableRedirectToLogin(
        $request
    )
    {
    }

    public function redirectPostLogin(
        $redirectUri
    )
    {
    }

    public function redirect(
        $redirectUri,
        $queryString
    )
    {
    }
}

namespace WHMCS\Version;
abstract class AbstractVersion
{

    protected $major = "";

    protected $minor = "";

    protected $patch = "";

    protected $preReleaseIdentifier = "";

    protected $preReleaseRevision = "";

    protected $buildTag = "";

    protected $casualNames = "";

    protected $version = "";

    protected $data = "";

    public function __construct(
        $version
    )
    {
    }

    abstract public function isValid(
        $version
    );

    abstract public function parse(
        $version
    );

    public function getVersion()
    {
    }

    public function setVersion(
        $version
    )
    {
    }

    public function getCanonical()
    {
    }

    public function getCasual()
    {
    }

    public function getMajor()
    {
    }

    public function getMinor()
    {
    }

    public function getPatch()
    {
    }

    public function getPreReleaseIdentifier()
    {
    }

    public function getPreReleaseRevision()
    {
    }

    public function getBuildTag()
    {
    }

    public function setMajor(
        $data
    )
    {
    }

    public function setMinor(
        $data
    )
    {
    }

    public function setPatch(
        $data
    )
    {
    }

    public function setPreReleaseIdentifier(
        $data
    )
    {
    }

    public function setPreReleaseRevision(
        $data
    )
    {
    }

    public function setBuildTag(
        $data
    )
    {
    }
}

namespace WHMCS\Version;
class SemanticVersion
{

    protected $major = "";

    protected $minor = "";

    protected $patch = "";

    protected $preReleaseIdentifier = "";

    protected $preReleaseRevision = "";

    protected $buildTag = "";

    protected $casualNames = "";

    protected $version = "";

    protected $data = "";

    protected function getSemVerPattern()
    {
    }

    public static function isSemantic(
        $version
    )
    {
    }

    public function isValid(
        $version
    )
    {
    }

    protected function separateBuildTag(
        $version
    )
    {
    }

    public function parse(
        $version
    )
    {
    }

    public function getCanonical()
    {
    }

    public function getRelease()
    {
    }

    public static function compare(
        $a,
        $b,
        $operator
    )
    {
    }

    public static function isNextRevision(
        $current,
        $next
    )
    {
    }

    private static function compareVersions(
        $a,
        $b,
        $operator,
        $allowLooseReleaseIncrement
    )
    {
    }

    protected static function getBoolForOperatorCompare(
        $operator,
        $status
    )
    {
    }

    protected static function getLabelHierarchyMap()
    {
    }

    public static function compareForSort(
        $versionA,
        $versionB
    )
    {
    }

    public function __construct(
        $version
    )
    {
    }

    public function getVersion()
    {
    }

    public function setVersion(
        $version
    )
    {
    }

    public function getCasual()
    {
    }

    public function getMajor()
    {
    }

    public function getMinor()
    {
    }

    public function getPatch()
    {
    }

    public function getPreReleaseIdentifier()
    {
    }

    public function getPreReleaseRevision()
    {
    }

    public function getBuildTag()
    {
    }

    public function setMajor(
        $data
    )
    {
    }

    public function setMinor(
        $data
    )
    {
    }

    public function setPatch(
        $data
    )
    {
    }

    public function setPreReleaseIdentifier(
        $data
    )
    {
    }

    public function setPreReleaseRevision(
        $data
    )
    {
    }

    public function setBuildTag(
        $data
    )
    {
    }
}

namespace WHMCS\Language;
abstract class AbstractLanguage
{

    protected $globalVariable = "";

    protected $name = "";

    protected static $languageCache = "";
    /**
     * @var MessageCatalogueInterface[]
     */
    protected $catalogues = "";
    /**
     * @var string
     */
    protected $locale = "";

    public function __construct(
        $name,
        $fallback,
        $languageDirectoryOverride
    )
    {
    }

    public static function getLanguages(
        $languageDirectoryOverride
    )
    {
    }

    public static function getValidLanguageName(
        $language,
        $fallback
    )
    {
    }

    public static function getLocales()
    {
    }

    public function getLanguageLocale()
    {
    }

    public function getName()
    {
    }

    public function toArray()
    {
    }

    protected function unFlatten(
        $messages,
        $key,
        $value
    )
    {
    }

    public function getFile()
    {
    }

    public function synchronizeFileWith(
        $language,
        $saveTo
    )
    {
    }

    public function getLanguageFileFooter()
    {
    }

    protected static function findOrCreate(
        $languageName
    )
    {
    }

    /**
     * Sets the ConfigCache factory to use.
     *
     * @param ConfigCacheFactoryInterface $configCacheFactory
     */
    public function setConfigCacheFactory(
        $configCacheFactory
    )
    {
    }

    /**
     * Adds a Loader.
     *
     * @param string $format The name of the loader (@see addResource())
     * @param LoaderInterface $loader A LoaderInterface instance
     */
    public function addLoader(
        $format,
        $loader
    )
    {
    }

    /**
     * Adds a Resource.
     *
     * @param string $format The name of the loader (@see addLoader())
     * @param mixed $resource The resource name
     * @param string $locale The locale
     * @param string $domain The domain
     *
     * @throws \InvalidArgumentException If the locale contains invalid characters
     */
    public function addResource(
        $format,
        $resource,
        $locale,
        $domain
    )
    {
    }

    /**
     * {@inheritdoc}
     */
    public function setLocale(
        $locale
    )
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
    }

    /**
     * Sets the fallback locale(s).
     *
     * @param string|array $locales The fallback locale(s)
     *
     * @throws \InvalidArgumentException If a locale contains invalid characters
     *
     * @deprecated since version 2.3, to be removed in 3.0. Use setFallbackLocales() instead.
     */
    public function setFallbackLocale(
        $locales
    )
    {
    }

    /**
     * Sets the fallback locales.
     *
     * @param array $locales The fallback locales
     *
     * @throws \InvalidArgumentException If a locale contains invalid characters
     */
    public function setFallbackLocales(
        $locales
    )
    {
    }

    /**
     * Gets the fallback locales.
     *
     * @return array $locales The fallback locales
     */
    public function getFallbackLocales()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function trans(
        $id,
        $parameters,
        $domain,
        $locale
    )
    {
    }

    /**
     * {@inheritdoc}
     */
    public function transChoice(
        $id,
        $number,
        $parameters,
        $domain,
        $locale
    )
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getCatalogue(
        $locale
    )
    {
    }

    /**
     * Gets the loaders.
     *
     * @return array LoaderInterface[]
     */
    protected function getLoaders()
    {
    }

    /**
     * Collects all messages for the given locale.
     *
     * @param string|null $locale Locale of translations, by default is current locale
     *
     * @return array[array] indexed by catalog
     *
     * @deprecated since version 2.8, to be removed in 3.0. Use TranslatorBagInterface::getCatalogue() method instead.
     */
    public function getMessages(
        $locale
    )
    {
    }

    /**
     * @param string $locale
     */
    protected function loadCatalogue(
        $locale
    )
    {
    }

    /**
     * @param string $locale
     */
    protected function initializeCatalogue(
        $locale
    )
    {
    }

    /**
     * @param string $locale
     */
    private function initializeCacheCatalogue(
        $locale
    )
    {
    }

    /**
     * This method is public because it needs to be callable from a closure in PHP 5.3. It should be made protected (or even private, if possible) in 3.0.
     *
     * @internal
     */
    public function dumpCatalogue(
        $locale,
        $cache
    )
    {
    }

    private function getFallbackContent(
        $catalogue
    )
    {
    }

    private function getCatalogueCachePath(
        $locale
    )
    {
    }

    private function doLoadCatalogue(
        $locale
    )
    {
    }

    private function loadFallbackCatalogues(
        $locale
    )
    {
    }

    protected function computeFallbackLocales(
        $locale
    )
    {
    }

    /**
     * Asserts that the locale is valid, throws an Exception if not.
     *
     * @param string $locale Locale to tests
     *
     * @throws \InvalidArgumentException If the locale contains invalid characters
     */
    protected function assertValidLocale(
        $locale
    )
    {
    }

    /**
     * Provides the ConfigCache factory implementation, falling back to a
     * default implementation if necessary.
     *
     * @return ConfigCacheFactoryInterface $configCacheFactory
     */
    private function getConfigCacheFactory()
    {
    }
}

namespace WHMCS\Language;
class ClientLanguage
{

    protected $globalVariable = "";

    protected $name = "";

    protected static $languageCache = "";
    /**
     * @var MessageCatalogueInterface[]
     */
    protected $catalogues = "";
    /**
     * @var string
     */
    protected $locale = "";

    public static function getDirectory()
    {
    }

    public static function factory(
        $systemLanguage,
        $sessionLanguage,
        $requestLanguage,
        $inClientArea
    )
    {
    }

    public function getLanguageFileFooter()
    {
    }

    public function __construct(
        $name,
        $fallback,
        $languageDirectoryOverride
    )
    {
    }

    public static function getLanguages(
        $languageDirectoryOverride
    )
    {
    }

    public static function getValidLanguageName(
        $language,
        $fallback
    )
    {
    }

    public static function getLocales()
    {
    }

    public function getLanguageLocale()
    {
    }

    public function getName()
    {
    }

    public function toArray()
    {
    }

    protected function unFlatten(
        $messages,
        $key,
        $value
    )
    {
    }

    public function getFile()
    {
    }

    public function synchronizeFileWith(
        $language,
        $saveTo
    )
    {
    }

    protected static function findOrCreate(
        $languageName
    )
    {
    }

    /**
     * Sets the ConfigCache factory to use.
     *
     * @param ConfigCacheFactoryInterface $configCacheFactory
     */
    public function setConfigCacheFactory(
        $configCacheFactory
    )
    {
    }

    /**
     * Adds a Loader.
     *
     * @param string $format The name of the loader (@see addResource())
     * @param LoaderInterface $loader A LoaderInterface instance
     */
    public function addLoader(
        $format,
        $loader
    )
    {
    }

    /**
     * Adds a Resource.
     *
     * @param string $format The name of the loader (@see addLoader())
     * @param mixed $resource The resource name
     * @param string $locale The locale
     * @param string $domain The domain
     *
     * @throws \InvalidArgumentException If the locale contains invalid characters
     */
    public function addResource(
        $format,
        $resource,
        $locale,
        $domain
    )
    {
    }

    /**
     * {@inheritdoc}
     */
    public function setLocale(
        $locale
    )
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
    }

    /**
     * Sets the fallback locale(s).
     *
     * @param string|array $locales The fallback locale(s)
     *
     * @throws \InvalidArgumentException If a locale contains invalid characters
     *
     * @deprecated since version 2.3, to be removed in 3.0. Use setFallbackLocales() instead.
     */
    public function setFallbackLocale(
        $locales
    )
    {
    }

    /**
     * Sets the fallback locales.
     *
     * @param array $locales The fallback locales
     *
     * @throws \InvalidArgumentException If a locale contains invalid characters
     */
    public function setFallbackLocales(
        $locales
    )
    {
    }

    /**
     * Gets the fallback locales.
     *
     * @return array $locales The fallback locales
     */
    public function getFallbackLocales()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function trans(
        $id,
        $parameters,
        $domain,
        $locale
    )
    {
    }

    /**
     * {@inheritdoc}
     */
    public function transChoice(
        $id,
        $number,
        $parameters,
        $domain,
        $locale
    )
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getCatalogue(
        $locale
    )
    {
    }

    /**
     * Gets the loaders.
     *
     * @return array LoaderInterface[]
     */
    protected function getLoaders()
    {
    }

    /**
     * Collects all messages for the given locale.
     *
     * @param string|null $locale Locale of translations, by default is current locale
     *
     * @return array[array] indexed by catalog
     *
     * @deprecated since version 2.8, to be removed in 3.0. Use TranslatorBagInterface::getCatalogue() method instead.
     */
    public function getMessages(
        $locale
    )
    {
    }

    /**
     * @param string $locale
     */
    protected function loadCatalogue(
        $locale
    )
    {
    }

    /**
     * @param string $locale
     */
    protected function initializeCatalogue(
        $locale
    )
    {
    }

    /**
     * @param string $locale
     */
    private function initializeCacheCatalogue(
        $locale
    )
    {
    }

    /**
     * This method is public because it needs to be callable from a closure in PHP 5.3. It should be made protected (or even private, if possible) in 3.0.
     *
     * @internal
     */
    public function dumpCatalogue(
        $locale,
        $cache
    )
    {
    }

    private function getFallbackContent(
        $catalogue
    )
    {
    }

    private function getCatalogueCachePath(
        $locale
    )
    {
    }

    private function doLoadCatalogue(
        $locale
    )
    {
    }

    private function loadFallbackCatalogues(
        $locale
    )
    {
    }

    protected function computeFallbackLocales(
        $locale
    )
    {
    }

    /**
     * Asserts that the locale is valid, throws an Exception if not.
     *
     * @param string $locale Locale to tests
     *
     * @throws \InvalidArgumentException If the locale contains invalid characters
     */
    protected function assertValidLocale(
        $locale
    )
    {
    }

    /**
     * Provides the ConfigCache factory implementation, falling back to a
     * default implementation if necessary.
     *
     * @return ConfigCacheFactoryInterface $configCacheFactory
     */
    private function getConfigCacheFactory()
    {
    }
}

namespace WHMCS\Language\Loader;
class WhmcsLoader
{

    protected $globalVariable = "";

    public function __construct(
        $globalVariable
    )
    {
    }

    public function load(
        $resource,
        $locale,
        $domain
    )
    {
    }

    /**
     * Flattens an nested array of translations.
     *
     * The scheme used is:
     *   'key' => array('key2' => array('key3' => 'value'))
     * Becomes:
     *   'key.key2.key3' => 'value'
     *
     * This function takes an array by reference and will modify it
     *
     * @param array  &$messages The array that will be flattened
     * @param array $subnode Current subnode being parsed, used internally for recursive calls
     * @param string $path Current path being parsed, used internally for recursive calls
     */
    private function flatten(
        $messages,
        $subnode,
        $path
    )
    {
    }
}

namespace WHMCS\Language\Loader;
class DatabaseLoader
{

    public function load(
        $resource,
        $locale,
        $domain
    )
    {
    }

    /**
     * Flattens an nested array of translations.
     *
     * The scheme used is:
     *   'key' => array('key2' => array('key3' => 'value'))
     * Becomes:
     *   'key.key2.key3' => 'value'
     *
     * This function takes an array by reference and will modify it
     *
     * @param array  &$messages The array that will be flattened
     * @param array $subnode Current subnode being parsed, used internally for recursive calls
     * @param string $path Current path being parsed, used internally for recursive calls
     */
    private function flatten(
        $messages,
        $subnode,
        $path
    )
    {
    }
}

namespace WHMCS;
class Carbon
{

    protected static $days = "";

    protected static $shortDays = "";

    protected static $months = "";

    protected static $shortMonths = "";

    protected static $daySuffixes = "";

    protected static $timeSuffixes = "";

    protected static $supportedLocales = "";
    /**
     * Terms used to detect if a time passed is a relative date for testing purposes
     *
     * @var array
     */
    protected static $relativeKeywords = "";
    /**
     * Format to use for __toString method when type juggling occurs.
     *
     * @var string
     */
    protected static $toStringFormat = "";
    /**
     * First day of week
     *
     * @var int
     */
    protected static $weekStartsAt = "";
    /**
     * Last day of week
     *
     * @var int
     */
    protected static $weekEndsAt = "";
    /**
     * Days of weekend
     *
     * @var array
     */
    protected static $weekendDays = "";
    /**
     * A test Carbon instance to be returned when now instances are created
     *
     * @var Carbon
     */
    protected static $testNow = "";
    /**
     * A translator to ... er ... translate stuff
     *
     * @var TranslatorInterface
     */
    protected static $translator = "";

    public function format(
        $format
    )
    {
    }

    public function translatePassedToFormat(
        $dateTime,
        $format
    )
    {
    }

    public function translateTimestampToFormat(
        $timestamp,
        $format
    )
    {
    }

    public static function setLocale(
        $locale
    )
    {
    }

    public function getAdminDateFormat(
        $withTime
    )
    {
    }

    public function toAdminDateFormat()
    {
    }

    public function toAdminDateTimeFormat()
    {
    }

    public static function createFromAdminDateFormat(
        $dateString
    )
    {
    }

    public static function createFromAdminDateTimeFormat(
        $dateTimeString
    )
    {
    }

    public function getClientDateFormat(
        $withTime
    )
    {
    }

    public function toClientDateFormat()
    {
    }

    public function toClientDateTimeFormat()
    {
    }

    public static function parseDateRangeValue(
        $value,
        $withTime
    )
    {
    }

    public static function fromCreditCard(
        $date
    )
    {
    }

    public function toCreditCard()
    {
    }

    public static function createFromCcInput(
        $monthYear
    )
    {
    }

    public function whmcsTimeDiffForHumans(
        $new,
        $absolute
    )
    {
    }

    protected function translateKey(
        $langKey
    )
    {
    }

    /**
     * Creates a DateTimeZone from a string or a DateTimeZone
     *
     * @param DateTimeZone|string|null $object
     *
     * @return DateTimeZone
     * @throws InvalidArgumentException
     *
     */
    protected static function safeCreateDateTimeZone(
        $object
    )
    {
    }

    /**
     * Create a new Carbon instance.
     *
     * Please see the testing aids section (specifically static::setTestNow())
     * for more on the possibility of this constructor returning a test instance.
     *
     * @param string|null $time
     * @param DateTimeZone|string|null $tz
     */
    public function __construct(
        $time,
        $tz
    )
    {
    }

    /**
     * Create a Carbon instance from a DateTime one
     *
     * @param DateTime $dt
     *
     * @return static
     */
    public static function instance(
        $dt
    )
    {
    }

    /**
     * Create a carbon instance from a string.  This is an alias for the
     * constructor that allows better fluent syntax as it allows you to do
     * Carbon::parse('Monday next week')->fn() rather than
     * (new Carbon('Monday next week'))->fn()
     *
     * @param string|null $time
     * @param DateTimeZone|string|null $tz
     *
     * @return static
     */
    public static function parse(
        $time,
        $tz
    )
    {
    }

    /**
     * Get a Carbon instance for the current date and time
     *
     * @param DateTimeZone|string|null $tz
     *
     * @return static
     */
    public static function now(
        $tz
    )
    {
    }

    /**
     * Create a Carbon instance for today
     *
     * @param DateTimeZone|string|null $tz
     *
     * @return static
     */
    public static function today(
        $tz
    )
    {
    }

    /**
     * Create a Carbon instance for tomorrow
     *
     * @param DateTimeZone|string|null $tz
     *
     * @return static
     */
    public static function tomorrow(
        $tz
    )
    {
    }

    /**
     * Create a Carbon instance for yesterday
     *
     * @param DateTimeZone|string|null $tz
     *
     * @return static
     */
    public static function yesterday(
        $tz
    )
    {
    }

    /**
     * Create a Carbon instance for the greatest supported date.
     *
     * @return Carbon
     */
    public static function maxValue()
    {
    }

    /**
     * Create a Carbon instance for the lowest supported date.
     *
     * @return Carbon
     */
    public static function minValue()
    {
    }

    /**
     * Create a new Carbon instance from a specific date and time.
     *
     * If any of $year, $month or $day are set to null their now() values
     * will be used.
     *
     * If $hour is null it will be set to its now() value and the default values
     * for $minute and $second will be their now() values.
     * If $hour is not null then the default values for $minute and $second
     * will be 0.
     *
     * @param int|null $year
     * @param int|null $month
     * @param int|null $day
     * @param int|null $hour
     * @param int|null $minute
     * @param int|null $second
     * @param DateTimeZone|string|null $tz
     *
     * @return static
     */
    public static function create(
        $year,
        $month,
        $day,
        $hour,
        $minute,
        $second,
        $tz
    )
    {
    }

    /**
     * Create a Carbon instance from just a date. The time portion is set to now.
     *
     * @param int|null $year
     * @param int|null $month
     * @param int|null $day
     * @param DateTimeZone|string|null $tz
     *
     * @return static
     */
    public static function createFromDate(
        $year,
        $month,
        $day,
        $tz
    )
    {
    }

    /**
     * Create a Carbon instance from just a time. The date portion is set to today.
     *
     * @param int|null $hour
     * @param int|null $minute
     * @param int|null $second
     * @param DateTimeZone|string|null $tz
     *
     * @return static
     */
    public static function createFromTime(
        $hour,
        $minute,
        $second,
        $tz
    )
    {
    }

    /**
     * Create a Carbon instance from a specific format
     *
     * @param string $format
     * @param string $time
     * @param DateTimeZone|string|null $tz
     *
     * @return static
     * @throws InvalidArgumentException
     *
     */
    public static function createFromFormat(
        $format,
        $time,
        $tz
    )
    {
    }

    /**
     * Create a Carbon instance from a timestamp
     *
     * @param int $timestamp
     * @param DateTimeZone|string|null $tz
     *
     * @return static
     */
    public static function createFromTimestamp(
        $timestamp,
        $tz
    )
    {
    }

    /**
     * Create a Carbon instance from an UTC timestamp
     *
     * @param int $timestamp
     *
     * @return static
     */
    public static function createFromTimestampUTC(
        $timestamp
    )
    {
    }

    /**
     * Get a copy of the instance
     *
     * @return static
     */
    public function copy()
    {
    }

    /**
     * Get a part of the Carbon object
     *
     * @param string $name
     *
     * @return string|int|DateTimeZone
     * @throws InvalidArgumentException
     *
     */
    public function __get(
        $name
    )
    {
    }

    /**
     * Check if an attribute exists on the object
     *
     * @param string $name
     *
     * @return bool
     */
    public function __isset(
        $name
    )
    {
    }

    /**
     * Set a part of the Carbon object
     *
     * @param string $name
     * @param string|int|DateTimeZone $value
     *
     * @throws InvalidArgumentException
     */
    public function __set(
        $name,
        $value
    )
    {
    }

    /**
     * Set the instance's year
     *
     * @param int $value
     *
     * @return static
     */
    public function year(
        $value
    )
    {
    }

    /**
     * Set the instance's month
     *
     * @param int $value
     *
     * @return static
     */
    public function month(
        $value
    )
    {
    }

    /**
     * Set the instance's day
     *
     * @param int $value
     *
     * @return static
     */
    public function day(
        $value
    )
    {
    }

    /**
     * Set the instance's hour
     *
     * @param int $value
     *
     * @return static
     */
    public function hour(
        $value
    )
    {
    }

    /**
     * Set the instance's minute
     *
     * @param int $value
     *
     * @return static
     */
    public function minute(
        $value
    )
    {
    }

    /**
     * Set the instance's second
     *
     * @param int $value
     *
     * @return static
     */
    public function second(
        $value
    )
    {
    }

    /**
     * Set the date and time all together
     *
     * @param int $year
     * @param int $month
     * @param int $day
     * @param int $hour
     * @param int $minute
     * @param int $second
     *
     * @return static
     */
    public function setDateTime(
        $year,
        $month,
        $day,
        $hour,
        $minute,
        $second
    )
    {
    }

    /**
     * Set the time by time string
     *
     * @param string $time
     *
     * @return static
     */
    public function setTimeFromTimeString(
        $time
    )
    {
    }

    /**
     * Set the instance's timestamp
     *
     * @param int $value
     *
     * @return static
     */
    public function timestamp(
        $value
    )
    {
    }

    /**
     * Alias for setTimezone()
     *
     * @param DateTimeZone|string $value
     *
     * @return static
     */
    public function timezone(
        $value
    )
    {
    }

    /**
     * Alias for setTimezone()
     *
     * @param DateTimeZone|string $value
     *
     * @return static
     */
    public function tz(
        $value
    )
    {
    }

    /**
     * Set the instance's timezone from a string or object
     *
     * @param DateTimeZone|string $value
     *
     * @return static
     */
    public function setTimezone(
        $value
    )
    {
    }

    /**
     * Get the first day of week
     *
     * @return int
     */
    public static function getWeekStartsAt()
    {
    }

    /**
     * Set the first day of week
     *
     * @param int
     */
    public static function setWeekStartsAt(
        $day
    )
    {
    }

    /**
     * Get the last day of week
     *
     * @return int
     */
    public static function getWeekEndsAt()
    {
    }

    /**
     * Set the first day of week
     *
     * @param int
     */
    public static function setWeekEndsAt(
        $day
    )
    {
    }

    /**
     * Get weekend days
     *
     * @return array
     */
    public static function getWeekendDays()
    {
    }

    /**
     * Set weekend days
     *
     * @param array
     */
    public static function setWeekendDays(
        $days
    )
    {
    }

    /**
     * Set a Carbon instance (real or mock) to be returned when a "now"
     * instance is created.  The provided instance will be returned
     * specifically under the following conditions:
     *   - A call to the static now() method, ex. Carbon::now()
     *   - When a null (or blank string) is passed to the constructor or parse(), ex. new Carbon(null)
     *   - When the string "now" is passed to the constructor or parse(), ex. new Carbon('now')
     *
     * Note the timezone parameter was left out of the examples above and
     * has no affect as the mock value will be returned regardless of its value.
     *
     * To clear the test instance call this method using the default
     * parameter of null.
     *
     * @param Carbon|null $testNow
     */
    public static function setTestNow(
        $testNow
    )
    {
    }

    /**
     * Get the Carbon instance (real or mock) to be returned when a "now"
     * instance is created.
     *
     * @return static the current instance used for testing
     */
    public static function getTestNow()
    {
    }

    /**
     * Determine if there is a valid test instance set. A valid test instance
     * is anything that is not null.
     *
     * @return bool true if there is a test instance, otherwise false
     */
    public static function hasTestNow()
    {
    }

    /**
     * Determine if there is a relative keyword in the time string, this is to
     * create dates relative to now for test instances. e.g.: next tuesday
     *
     * @param string $time
     *
     * @return bool true if there is a keyword, otherwise false
     */
    public static function hasRelativeKeywords(
        $time
    )
    {
    }

    /**
     * Intialize the translator instance if necessary.
     *
     * @return TranslatorInterface
     */
    protected static function translator()
    {
    }

    /**
     * Get the translator instance in use
     *
     * @return TranslatorInterface
     */
    public static function getTranslator()
    {
    }

    /**
     * Set the translator instance to use
     *
     * @param TranslatorInterface $translator
     */
    public static function setTranslator(
        $translator
    )
    {
    }

    /**
     * Get the current translator locale
     *
     * @return string
     */
    public static function getLocale()
    {
    }

    /**
     * Format the instance with the current locale.  You can set the current
     * locale using setlocale() http://php.net/setlocale.
     *
     * @param string $format
     *
     * @return string
     */
    public function formatLocalized(
        $format
    )
    {
    }

    /**
     * Reset the format used to the default when type juggling a Carbon instance to a string
     */
    public static function resetToStringFormat()
    {
    }

    /**
     * Set the default format used when type juggling a Carbon instance to a string
     *
     * @param string $format
     */
    public static function setToStringFormat(
        $format
    )
    {
    }

    /**
     * Format the instance as a string using the set format
     *
     * @return string
     */
    public function __toString()
    {
    }

    /**
     * Format the instance as date
     *
     * @return string
     */
    public function toDateString()
    {
    }

    /**
     * Format the instance as a readable date
     *
     * @return string
     */
    public function toFormattedDateString()
    {
    }

    /**
     * Format the instance as time
     *
     * @return string
     */
    public function toTimeString()
    {
    }

    /**
     * Format the instance as date and time
     *
     * @return string
     */
    public function toDateTimeString()
    {
    }

    /**
     * Format the instance with day, date and time
     *
     * @return string
     */
    public function toDayDateTimeString()
    {
    }

    /**
     * Format the instance as ATOM
     *
     * @return string
     */
    public function toAtomString()
    {
    }

    /**
     * Format the instance as COOKIE
     *
     * @return string
     */
    public function toCookieString()
    {
    }

    /**
     * Format the instance as ISO8601
     *
     * @return string
     */
    public function toIso8601String()
    {
    }

    /**
     * Format the instance as RFC822
     *
     * @return string
     */
    public function toRfc822String()
    {
    }

    /**
     * Format the instance as RFC850
     *
     * @return string
     */
    public function toRfc850String()
    {
    }

    /**
     * Format the instance as RFC1036
     *
     * @return string
     */
    public function toRfc1036String()
    {
    }

    /**
     * Format the instance as RFC1123
     *
     * @return string
     */
    public function toRfc1123String()
    {
    }

    /**
     * Format the instance as RFC2822
     *
     * @return string
     */
    public function toRfc2822String()
    {
    }

    /**
     * Format the instance as RFC3339
     *
     * @return string
     */
    public function toRfc3339String()
    {
    }

    /**
     * Format the instance as RSS
     *
     * @return string
     */
    public function toRssString()
    {
    }

    /**
     * Format the instance as W3C
     *
     * @return string
     */
    public function toW3cString()
    {
    }

    /**
     * Determines if the instance is equal to another
     *
     * @param Carbon $dt
     *
     * @return bool
     */
    public function eq(
        $dt
    )
    {
    }

    /**
     * Determines if the instance is not equal to another
     *
     * @param Carbon $dt
     *
     * @return bool
     */
    public function ne(
        $dt
    )
    {
    }

    /**
     * Determines if the instance is greater (after) than another
     *
     * @param Carbon $dt
     *
     * @return bool
     */
    public function gt(
        $dt
    )
    {
    }

    /**
     * Determines if the instance is greater (after) than or equal to another
     *
     * @param Carbon $dt
     *
     * @return bool
     */
    public function gte(
        $dt
    )
    {
    }

    /**
     * Determines if the instance is less (before) than another
     *
     * @param Carbon $dt
     *
     * @return bool
     */
    public function lt(
        $dt
    )
    {
    }

    /**
     * Determines if the instance is less (before) or equal to another
     *
     * @param Carbon $dt
     *
     * @return bool
     */
    public function lte(
        $dt
    )
    {
    }

    /**
     * Determines if the instance is between two others
     *
     * @param Carbon $dt1
     * @param Carbon $dt2
     * @param bool $equal Indicates if a > and < comparison should be used or <= or >=
     *
     * @return bool
     */
    public function between(
        $dt1,
        $dt2,
        $equal = "1"
    )
    {
    }

    /**
     * Get the closest date from the instance.
     *
     * @param Carbon $dt1
     * @param Carbon $dt2
     *
     * @return static
     */
    public function closest(
        $dt1,
        $dt2
    )
    {
    }

    /**
     * Get the farthest date from the instance.
     *
     * @param Carbon $dt1
     * @param Carbon $dt2
     *
     * @return static
     */
    public function farthest(
        $dt1,
        $dt2
    )
    {
    }

    /**
     * Get the minimum instance between a given instance (default now) and the current instance.
     *
     * @param Carbon|null $dt
     *
     * @return static
     */
    public function min(
        $dt
    )
    {
    }

    /**
     * Get the maximum instance between a given instance (default now) and the current instance.
     *
     * @param Carbon|null $dt
     *
     * @return static
     */
    public function max(
        $dt
    )
    {
    }

    /**
     * Determines if the instance is a weekday
     *
     * @return bool
     */
    public function isWeekday()
    {
    }

    /**
     * Determines if the instance is a weekend day
     *
     * @return bool
     */
    public function isWeekend()
    {
    }

    /**
     * Determines if the instance is yesterday
     *
     * @return bool
     */
    public function isYesterday()
    {
    }

    /**
     * Determines if the instance is today
     *
     * @return bool
     */
    public function isToday()
    {
    }

    /**
     * Determines if the instance is tomorrow
     *
     * @return bool
     */
    public function isTomorrow()
    {
    }

    /**
     * Determines if the instance is in the future, ie. greater (after) than now
     *
     * @return bool
     */
    public function isFuture()
    {
    }

    /**
     * Determines if the instance is in the past, ie. less (before) than now
     *
     * @return bool
     */
    public function isPast()
    {
    }

    /**
     * Determines if the instance is a leap year
     *
     * @return bool
     */
    public function isLeapYear()
    {
    }

    /**
     * Checks if the passed in date is the same day as the instance current day.
     *
     * @param Carbon $dt
     *
     * @return bool
     */
    public function isSameDay(
        $dt
    )
    {
    }

    /**
     * Checks if this day is a Sunday.
     *
     * @return bool
     */
    public function isSunday()
    {
    }

    /**
     * Checks if this day is a Monday.
     *
     * @return bool
     */
    public function isMonday()
    {
    }

    /**
     * Checks if this day is a Tuesday.
     *
     * @return bool
     */
    public function isTuesday()
    {
    }

    /**
     * Checks if this day is a Wednesday.
     *
     * @return bool
     */
    public function isWednesday()
    {
    }

    /**
     * Checks if this day is a Thursday.
     *
     * @return bool
     */
    public function isThursday()
    {
    }

    /**
     * Checks if this day is a Friday.
     *
     * @return bool
     */
    public function isFriday()
    {
    }

    /**
     * Checks if this day is a Saturday.
     *
     * @return bool
     */
    public function isSaturday()
    {
    }

    /**
     * Add years to the instance. Positive $value travel forward while
     * negative $value travel into the past.
     *
     * @param int $value
     *
     * @return static
     */
    public function addYears(
        $value
    )
    {
    }

    /**
     * Add a year to the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function addYear(
        $value = "1"
    )
    {
    }

    /**
     * Remove a year from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subYear(
        $value = "1"
    )
    {
    }

    /**
     * Remove years from the instance.
     *
     * @param int $value
     *
     * @return static
     */
    public function subYears(
        $value
    )
    {
    }

    /**
     * Add months to the instance. Positive $value travels forward while
     * negative $value travels into the past.
     *
     * @param int $value
     *
     * @return static
     */
    public function addMonths(
        $value
    )
    {
    }

    /**
     * Add a month to the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function addMonth(
        $value = "1"
    )
    {
    }

    /**
     * Remove a month from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subMonth(
        $value = "1"
    )
    {
    }

    /**
     * Remove months from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subMonths(
        $value
    )
    {
    }

    /**
     * Add months without overflowing to the instance. Positive $value
     * travels forward while negative $value travels into the past.
     *
     * @param int $value
     *
     * @return static
     */
    public function addMonthsNoOverflow(
        $value
    )
    {
    }

    /**
     * Add a month with no overflow to the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function addMonthNoOverflow(
        $value = "1"
    )
    {
    }

    /**
     * Remove a month with no overflow from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subMonthNoOverflow(
        $value = "1"
    )
    {
    }

    /**
     * Remove months with no overflow from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subMonthsNoOverflow(
        $value
    )
    {
    }

    /**
     * Add days to the instance. Positive $value travels forward while
     * negative $value travels into the past.
     *
     * @param int $value
     *
     * @return static
     */
    public function addDays(
        $value
    )
    {
    }

    /**
     * Add a day to the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function addDay(
        $value = "1"
    )
    {
    }

    /**
     * Remove a day from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subDay(
        $value = "1"
    )
    {
    }

    /**
     * Remove days from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subDays(
        $value
    )
    {
    }

    /**
     * Add weekdays to the instance. Positive $value travels forward while
     * negative $value travels into the past.
     *
     * @param int $value
     *
     * @return static
     */
    public function addWeekdays(
        $value
    )
    {
    }

    /**
     * Add a weekday to the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function addWeekday(
        $value = "1"
    )
    {
    }

    /**
     * Remove a weekday from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subWeekday(
        $value = "1"
    )
    {
    }

    /**
     * Remove weekdays from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subWeekdays(
        $value
    )
    {
    }

    /**
     * Add weeks to the instance. Positive $value travels forward while
     * negative $value travels into the past.
     *
     * @param int $value
     *
     * @return static
     */
    public function addWeeks(
        $value
    )
    {
    }

    /**
     * Add a week to the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function addWeek(
        $value = "1"
    )
    {
    }

    /**
     * Remove a week from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subWeek(
        $value = "1"
    )
    {
    }

    /**
     * Remove weeks to the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subWeeks(
        $value
    )
    {
    }

    /**
     * Add hours to the instance. Positive $value travels forward while
     * negative $value travels into the past.
     *
     * @param int $value
     *
     * @return static
     */
    public function addHours(
        $value
    )
    {
    }

    /**
     * Add an hour to the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function addHour(
        $value = "1"
    )
    {
    }

    /**
     * Remove an hour from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subHour(
        $value = "1"
    )
    {
    }

    /**
     * Remove hours from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subHours(
        $value
    )
    {
    }

    /**
     * Add minutes to the instance. Positive $value travels forward while
     * negative $value travels into the past.
     *
     * @param int $value
     *
     * @return static
     */
    public function addMinutes(
        $value
    )
    {
    }

    /**
     * Add a minute to the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function addMinute(
        $value = "1"
    )
    {
    }

    /**
     * Remove a minute from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subMinute(
        $value = "1"
    )
    {
    }

    /**
     * Remove minutes from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subMinutes(
        $value
    )
    {
    }

    /**
     * Add seconds to the instance. Positive $value travels forward while
     * negative $value travels into the past.
     *
     * @param int $value
     *
     * @return static
     */
    public function addSeconds(
        $value
    )
    {
    }

    /**
     * Add a second to the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function addSecond(
        $value = "1"
    )
    {
    }

    /**
     * Remove a second from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subSecond(
        $value = "1"
    )
    {
    }

    /**
     * Remove seconds from the instance
     *
     * @param int $value
     *
     * @return static
     */
    public function subSeconds(
        $value
    )
    {
    }

    /**
     * Get the difference in years
     *
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffInYears(
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * Get the difference in months
     *
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffInMonths(
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * Get the difference in weeks
     *
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffInWeeks(
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * Get the difference in days
     *
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffInDays(
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * Get the difference in days using a filter closure
     *
     * @param Closure $callback
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffInDaysFiltered(
        $callback,
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * Get the difference in hours using a filter closure
     *
     * @param Closure $callback
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffInHoursFiltered(
        $callback,
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * Get the difference by the given interval using a filter closure
     *
     * @param CarbonInterval $ci An interval to traverse by
     * @param Closure $callback
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffFiltered(
        $ci,
        $callback,
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * Get the difference in weekdays
     *
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffInWeekdays(
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * Get the difference in weekend days using a filter
     *
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffInWeekendDays(
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * Get the difference in hours
     *
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffInHours(
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * Get the difference in minutes
     *
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffInMinutes(
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * Get the difference in seconds
     *
     * @param Carbon|null $dt
     * @param bool $abs Get the absolute of the difference
     *
     * @return int
     */
    public function diffInSeconds(
        $dt,
        $abs = "1"
    )
    {
    }

    /**
     * The number of seconds since midnight.
     *
     * @return int
     */
    public function secondsSinceMidnight()
    {
    }

    /**
     * The number of seconds until 23:23:59.
     *
     * @return int
     */
    public function secondsUntilEndOfDay()
    {
    }

    /**
     * Get the difference in a human readable format in the current locale.
     *
     * When comparing a value in the past to default now:
     * 1 hour ago
     * 5 months ago
     *
     * When comparing a value in the future to default now:
     * 1 hour from now
     * 5 months from now
     *
     * When comparing a value in the past to another value:
     * 1 hour before
     * 5 months before
     *
     * When comparing a value in the future to another value:
     * 1 hour after
     * 5 months after
     *
     * @param Carbon|null $other
     * @param bool $absolute removes time difference modifiers ago, after, etc
     *
     * @return string
     */
    public function diffForHumans(
        $other,
        $absolute
    )
    {
    }

    /**
     * Resets the time to 00:00:00
     *
     * @return static
     */
    public function startOfDay()
    {
    }

    /**
     * Resets the time to 23:59:59
     *
     * @return static
     */
    public function endOfDay()
    {
    }

    /**
     * Resets the date to the first day of the month and the time to 00:00:00
     *
     * @return static
     */
    public function startOfMonth()
    {
    }

    /**
     * Resets the date to end of the month and time to 23:59:59
     *
     * @return static
     */
    public function endOfMonth()
    {
    }

    /**
     * Resets the date to the first day of the year and the time to 00:00:00
     *
     * @return static
     */
    public function startOfYear()
    {
    }

    /**
     * Resets the date to end of the year and time to 23:59:59
     *
     * @return static
     */
    public function endOfYear()
    {
    }

    /**
     * Resets the date to the first day of the decade and the time to 00:00:00
     *
     * @return static
     */
    public function startOfDecade()
    {
    }

    /**
     * Resets the date to end of the decade and time to 23:59:59
     *
     * @return static
     */
    public function endOfDecade()
    {
    }

    /**
     * Resets the date to the first day of the century and the time to 00:00:00
     *
     * @return static
     */
    public function startOfCentury()
    {
    }

    /**
     * Resets the date to end of the century and time to 23:59:59
     *
     * @return static
     */
    public function endOfCentury()
    {
    }

    /**
     * Resets the date to the first day of week (defined in $weekStartsAt) and the time to 00:00:00
     *
     * @return static
     */
    public function startOfWeek()
    {
    }

    /**
     * Resets the date to end of week (defined in $weekEndsAt) and time to 23:59:59
     *
     * @return static
     */
    public function endOfWeek()
    {
    }

    /**
     * Modify to the next occurrence of a given day of the week.
     * If no dayOfWeek is provided, modify to the next occurrence
     * of the current day of the week.  Use the supplied consts
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek
     *
     * @return static
     */
    public function next(
        $dayOfWeek
    )
    {
    }

    /**
     * Modify to the previous occurrence of a given day of the week.
     * If no dayOfWeek is provided, modify to the previous occurrence
     * of the current day of the week.  Use the supplied consts
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek
     *
     * @return static
     */
    public function previous(
        $dayOfWeek
    )
    {
    }

    /**
     * Modify to the first occurrence of a given day of the week
     * in the current month. If no dayOfWeek is provided, modify to the
     * first day of the current month.  Use the supplied consts
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek
     *
     * @return static
     */
    public function firstOfMonth(
        $dayOfWeek
    )
    {
    }

    /**
     * Modify to the last occurrence of a given day of the week
     * in the current month. If no dayOfWeek is provided, modify to the
     * last day of the current month.  Use the supplied consts
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek
     *
     * @return static
     */
    public function lastOfMonth(
        $dayOfWeek
    )
    {
    }

    /**
     * Modify to the given occurrence of a given day of the week
     * in the current month. If the calculated occurrence is outside the scope
     * of the current month, then return false and no modifications are made.
     * Use the supplied consts to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int $nth
     * @param int $dayOfWeek
     *
     * @return mixed
     */
    public function nthOfMonth(
        $nth,
        $dayOfWeek
    )
    {
    }

    /**
     * Modify to the first occurrence of a given day of the week
     * in the current quarter. If no dayOfWeek is provided, modify to the
     * first day of the current quarter.  Use the supplied consts
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek
     *
     * @return static
     */
    public function firstOfQuarter(
        $dayOfWeek
    )
    {
    }

    /**
     * Modify to the last occurrence of a given day of the week
     * in the current quarter. If no dayOfWeek is provided, modify to the
     * last day of the current quarter.  Use the supplied consts
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek
     *
     * @return static
     */
    public function lastOfQuarter(
        $dayOfWeek
    )
    {
    }

    /**
     * Modify to the given occurrence of a given day of the week
     * in the current quarter. If the calculated occurrence is outside the scope
     * of the current quarter, then return false and no modifications are made.
     * Use the supplied consts to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int $nth
     * @param int $dayOfWeek
     *
     * @return mixed
     */
    public function nthOfQuarter(
        $nth,
        $dayOfWeek
    )
    {
    }

    /**
     * Modify to the first occurrence of a given day of the week
     * in the current year. If no dayOfWeek is provided, modify to the
     * first day of the current year.  Use the supplied consts
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek
     *
     * @return static
     */
    public function firstOfYear(
        $dayOfWeek
    )
    {
    }

    /**
     * Modify to the last occurrence of a given day of the week
     * in the current year. If no dayOfWeek is provided, modify to the
     * last day of the current year.  Use the supplied consts
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek
     *
     * @return static
     */
    public function lastOfYear(
        $dayOfWeek
    )
    {
    }

    /**
     * Modify to the given occurrence of a given day of the week
     * in the current year. If the calculated occurrence is outside the scope
     * of the current year, then return false and no modifications are made.
     * Use the supplied consts to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int $nth
     * @param int $dayOfWeek
     *
     * @return mixed
     */
    public function nthOfYear(
        $nth,
        $dayOfWeek
    )
    {
    }

    /**
     * Modify the current instance to the average of a given instance (default now) and the current instance.
     *
     * @param Carbon|null $dt
     *
     * @return static
     */
    public function average(
        $dt
    )
    {
    }

    /**
     * Check if its the birthday. Compares the date/month values of the two dates.
     *
     * @param Carbon|null $dt The instance to compare with or null to use current day.
     *
     * @return bool
     */
    public function isBirthday(
        $dt
    )
    {
    }

    public function __wakeup()
    {
    }

    public static function __set_state(
        $array
    )
    {
    }

    public static function createFromImmutable(
        $DateTimeImmutable
    )
    {
    }

    public static function getLastErrors()
    {
    }

    public function modify(
        $modify
    )
    {
    }

    public function add(
        $interval
    )
    {
    }

    public function sub(
        $interval
    )
    {
    }

    public function getTimezone()
    {
    }

    public function getOffset()
    {
    }

    public function setTime(
        $hour,
        $minute,
        $second,
        $microseconds
    )
    {
    }

    public function setDate(
        $year,
        $month,
        $day
    )
    {
    }

    public function setISODate(
        $year,
        $week,
        $day
    )
    {
    }

    public function setTimestamp(
        $unixtimestamp
    )
    {
    }

    public function getTimestamp()
    {
    }

    public function diff(
        $object,
        $absolute
    )
    {
    }
}

namespace WHMCS;
class License
{

    private $licensekey = "";

    private $localkey = "";

    private $keydata = "";

    private $salt = "";

    private $postmd5hash = "";

    private $localkeydays = "";

    private $allowcheckfaildays = "";

    private $useInternalLicensingMirror = "";

    private $debuglog = "";

    private $lastCurlError = "";

    public function checkFile(
        $value
    )
    {
    }

    public function setLicenseKey(
        $licenseKey
    )
    {
    }

    public function setLocalKey(
        $localKey
    )
    {
    }

    public function setSalt(
        $version,
        $hash
    )
    {
    }

    public function useInternalValidationMirror()
    {
    }

    protected function getHosts()
    {
    }

    public function getLicenseKey()
    {
    }

    protected function getHostDomain()
    {
    }

    protected function getHostIP()
    {
    }

    protected function getHostDir()
    {
    }

    private function getSalt()
    {
    }

    protected function isLocalKeyValidToUse()
    {
    }

    protected function hasLocalKeyExpired()
    {
    }

    protected function buildPostData()
    {
    }

    public function isUnlicensed()
    {
    }

    public function validate(
        $forceRemote
    )
    {
    }

    private function callHomeLoop(
        $query_string,
        $timeout = "5"
    )
    {
    }

    protected function callHome(
        $postfields
    )
    {
    }

    private function getVerifyUrl(
        $host
    )
    {
    }

    private function validateCurlIsAvailable()
    {
    }

    protected function makeCall(
        $url,
        $query_string,
        $timeout = "5"
    )
    {
    }

    private function processResponse(
        $data
    )
    {
    }

    private function parseSignedResponse(
        $response,
        $publicKey
    )
    {
    }

    private function updateLocalKey(
        $data
    )
    {
    }

    public function forceRemoteCheck()
    {
    }

    private function decodeLocal(
        $localkey
    )
    {
    }

    protected function isRunningInCLI()
    {
    }

    protected function hasLocalKey()
    {
    }

    protected function validateLocalKey()
    {
    }

    private function isValidDomain(
        $domain
    )
    {
    }

    private function isValidIP(
        $ip
    )
    {
    }

    private function isValidDir(
        $dir
    )
    {
    }

    public function getBanner()
    {
    }

    private function revokeLocal()
    {
    }

    public function getKeyData(
        $var
    )
    {
    }

    private function setKeyData(
        $data
    )
    {
    }

    protected function getArrayKeyData(
        $var
    )
    {
    }

    public function getRegisteredName()
    {
    }

    public function getProductName()
    {
    }

    public function getStatus()
    {
    }

    public function getSupportAccess()
    {
    }

    protected function getCheckDate()
    {
    }

    protected function getLicensedAddons()
    {
    }

    public function getActiveAddons()
    {
    }

    public function isActiveAddon(
        $addon
    )
    {
    }

    public function getExpiryDate(
        $showday
    )
    {
    }

    public function getLatestPublicVersion()
    {
    }

    public function getLatestPreReleaseVersion()
    {
    }

    public function getLatestVersion()
    {
    }

    public function isUpdateAvailable()
    {
    }

    public function getRequiresUpdates()
    {
    }

    public function getUpdatesExpirationDate()
    {
    }

    public function checkOwnedUpdatesForReleaseDate(
        $releaseDate
    )
    {
    }

    public function checkOwnedUpdates()
    {
    }

    public function getBrandingRemoval()
    {
    }

    private function debug(
        $msg
    )
    {
    }

    public function getDebugLog()
    {
    }

    public function getUpdateValidityDate()
    {
    }

    public function isClientLimitsEnabled()
    {
    }

    public function getClientLimit()
    {
    }

    public function getTextClientLimit()
    {
    }

    public function getNumberOfActiveClients()
    {
    }

    public function getTextNumberOfActiveClients(
        $admin
    )
    {
    }

    public function getClientBoundaryId()
    {
    }

    public function isNearClientLimit()
    {
    }

    public function isClientLimitsAutoUpgradeEnabled()
    {
    }

    public function getClientLimitLearnMoreUrl()
    {
    }

    public function getClientLimitUpgradeUrl()
    {
    }

    protected function getMemberPublicKey()
    {
    }

    protected function setMemberPublicKey(
        $publicKey
    )
    {
    }

    public function encryptMemberData(
        $data
    )
    {
    }

    public function getClientLimitNotificationAttributes()
    {
    }

    protected function buildMemberData()
    {
    }

    public function getEncryptedMemberData()
    {
    }

    protected function getUpgradeUrl(
        $host
    )
    {
    }

    public function makeUpgradeCall()
    {
    }

    public function isValidLicenseKey(
        $licenseKey
    )
    {
    }

    private function getWhmcsNetKey()
    {
    }

    public function hashMessage(
        $value
    )
    {
    }

    public function getValueFromHashMessage(
        $message
    )
    {
    }

    public function isValidHashMessage(
        $message
    )
    {
    }
}

namespace WHMCS\Utility;
final class SafeInclude
{

    private static $ioncubeFile = "";

    public static function file(
        $filename,
        $failureCallback
    )
    {
    }

    public static function criticalFile(
        $filename,
        $failureCallback
    )
    {
    }
}

namespace WHMCS\Environment\Ioncube;
class EncodedFile
{

    private $filename = "";

    private $encoderVersion = "";

    private $targetPhpVersion = "";

    private $bundledPhpVersions = "";

    private $fileContentHash = "";

    public function __construct(
        $filename,
        $contentHash,
        $encoderVersion,
        $bundledPhpVersions,
        $targetPhpVersion
    )
    {
    }

    public function getFileContentHash()
    {
    }

    public static function generateFileContentHash(
        $filename
    )
    {
    }

    private function reset()
    {
    }

    public function analyze(
        $filename
    )
    {
    }

    public function getEncoderVersion()
    {
    }

    public function isBundled()
    {
    }

    public function hasPhpVersionBundled(
        $phpVersion
    )
    {
    }

    public function getBundledPhpVersions()
    {
    }

    public function getTargetPhpVersion()
    {
    }

    public function getFilename()
    {
    }

    public function canRunOnIoncubeLoaderVersion(
        $ioncubeLoaderVersion
    )
    {
    }

    public function canRunOnInstalledIoncubeLoader()
    {
    }

    private function canBundleRunOnPhpVersion(
        $phpVersion
    )
    {
    }

    public function canRunOnPhpVersion(
        $phpVersion
    )
    {
    }

    public function canRunOnInstalledPhpVersion()
    {
    }

    public function getLoggable()
    {
    }

    public function versionCompatibilityAssessment(
        $phpVersion,
        $loader
    )
    {
    }
}

namespace WHMCS\Environment\Ioncube\Loader;
class LocalLoader
{

    private static $version = "";

    private static $loader = "";

    public function __construct(
        $version
    )
    {
    }

    public static function getVersion()
    {
    }

    public static function factoryLoader(
        $version
    )
    {
    }

    public function compatAssessment(
        $phpVersion,
        $file
    )
    {
    }

    public function supportsBundledEncoding()
    {
    }

    public function getInternalLoader()
    {
    }
}

namespace WHMCS\Module;
class Module
{

    protected $classMap = "";

    private static $hookLoads = "";

    protected $cacheActiveModules = "";

    public function getClassMap()
    {
    }

    public function getAllClasses()
    {
    }

    public function getClassByModuleType(
        $type
    )
    {
    }

    public static function sluggify(
        $moduleType,
        $moduleName
    )
    {
    }

    public static function defineHooks()
    {
    }
}

namespace WHMCS\Module;
abstract class AbstractModule
{

    protected $type = "";

    protected $loadedmodule = "";

    protected $metaData = "";

    protected $moduleParams = "";

    protected $usesDirectories = "";

    protected $cacheActiveModules = "";

    public function getType()
    {
    }

    protected function setLoadedModule(
        $module
    )
    {
    }

    public function getLoadedModule()
    {
    }

    public function getList(
        $type
    )
    {
    }

    protected function getBaseModulesDir()
    {
    }

    public function getBaseModuleDir()
    {
    }

    public function getModuleDirectory(
        $module
    )
    {
    }

    public function getModulePath(
        $module
    )
    {
    }

    public function getAppMetaDataFilePath(
        $module
    )
    {
    }

    public function load(
        $module,
        $globalVariable
    )
    {
    }

    public function call(
        $function,
        $params
    )
    {
    }

    public function functionExists(
        $name
    )
    {
    }

    protected function getMetaData()
    {
    }

    protected function setMetaData(
        $metaData
    )
    {
    }

    public function getMetaDataValue(
        $keyName
    )
    {
    }

    public function isMetaDataValueSet(
        $keyName
    )
    {
    }

    public function getDisplayName()
    {
    }

    public function getAPIVersion()
    {
    }

    public function getApplicationLinkDescription()
    {
    }

    public function getLogoFilename()
    {
    }

    public function getSmallLogoFilename()
    {
    }

    protected function getDefaultAPIVersion()
    {
    }

    public function prepareParams(
        $params
    )
    {
    }

    protected function addParam(
        $key,
        $value
    )
    {
    }

    public function getParams()
    {
    }

    public function getParam(
        $key
    )
    {
    }

    public function findTemplate(
        $templateName
    )
    {
    }

    public function isApplicationLinkSupported()
    {
    }

    public function isApplicationLinkingEnabled()
    {
    }

    public function activate(
        $parameters
    )
    {
    }

    public function deactivate(
        $parameters
    )
    {
    }

    public function updateConfiguration(
        $parameters
    )
    {
    }

    public function getConfiguration()
    {
    }

    public function getActiveModules()
    {
    }

    public function isActive(
        $moduleName
    )
    {
    }

    public function getApps()
    {
    }

    public function getAdminActivationForms(
        $moduleName
    )
    {
    }

    public function getAdminManagementForms(
        $moduleName
    )
    {
    }
}

namespace WHMCS\MarketConnect;
class Promotion
{

    public static function initHooks()
    {
    }

    public static function cartViewPromotion()
    {
    }

    protected static function renderPromotionsCarousel(
        $promotions
    )
    {
    }
}

namespace WHMCS\Notification;
class Events
{

    public static function all()
    {
    }

    public static function factory(
        $name
    )
    {
    }

    public static function defineHooks()
    {
    }

    public static function trigger(
        $eventType,
        $event,
        $hookParameters
    )
    {
    }
}

namespace WHMCS\Notification\Events;
class Ticket
{

    public function getEvents()
    {
    }

    public function getConditions()
    {
    }

    public function evaluateConditions(
        $event,
        $conditions,
        $hookParameters
    )
    {
    }

    public function buildNotification(
        $event,
        $hookParameters
    )
    {
    }
}

namespace WHMCS\Notification\Events;
class Invoice
{

    public function getEvents()
    {
    }

    public function getConditions()
    {
    }

    public function evaluateConditions(
        $event,
        $conditions,
        $hookParameters
    )
    {
    }

    public function buildNotification(
        $event,
        $hookParameters
    )
    {
    }
}

namespace WHMCS\Notification\Events;
class Order
{

    public function getEvents()
    {
    }

    public function getConditions()
    {
    }

    public function evaluateConditions(
        $event,
        $conditions,
        $hookParameters
    )
    {
    }

    public function buildNotification(
        $event,
        $hookParameters
    )
    {
    }
}

namespace WHMCS\Notification\Events;
class Service
{

    public function getEvents()
    {
    }

    public function getConditions()
    {
    }

    public function evaluateConditions(
        $event,
        $conditions,
        $hookParameters
    )
    {
    }

    public function buildNotification(
        $event,
        $hookParameters
    )
    {
    }
}

namespace WHMCS\Notification\Events;
class Domain
{

    public function getEvents()
    {
    }

    public function getConditions()
    {
    }

    public function evaluateConditions(
        $event,
        $conditions,
        $hookParameters
    )
    {
    }

    public function buildNotification(
        $event,
        $hookParameters
    )
    {
    }
}

namespace WHMCS\Notification\Events;
class API
{

    public function getEvents()
    {
    }

    public function getConditions()
    {
    }

    public function evaluateConditions(
        $event,
        $conditions,
        $hookParameters
    )
    {
    }

    public function buildNotification(
        $event,
        $hookParameters
    )
    {
    }
}
